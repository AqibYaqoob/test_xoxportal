<?php

namespace App\Http\Controllers\VoyagerPageBlocks;

use Illuminate\Http\Request;
use Pvtl\VoyagerPageBlocks\Page;
use Illuminate\Support\Facades\View;
use Pvtl\VoyagerPageBlocks\Traits\Blocks;
use Illuminate\Support\Facades\DB;

class PageController extends \Pvtl\VoyagerFrontend\Http\Controllers\PageController
{
    use Blocks;



    /**
     * Fetch all pages and their associated blocks
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPage($slug = 'home')
    {
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        $blocks = $page->blocks()
            ->where('is_hidden', '=', '0')
            ->orderBy('order', 'asc')
            ->get()
            ->map(function ($block) {
                return (object)[
                    'id' => $block->id,
                    'page_id' => $block->page_id,
                    'updated_at' => $block->updated_at,
                    'cache_ttl' => $block->cache_ttl,
                    'template' => $block->template()->template,
                    'data' => $block->cachedData,
                    'path' => $block->path,
                    'type' => $block->type,
                    'publish' => $block->publish,
                ];
            });

        // Override standard body content, with page block content
        $page['body'] = view('voyager-page-blocks::default', [
            'page' => $page,
            'blocks' => $this->prepareEachBlock($blocks),
        ]);

        // Check that the page Layout and its View exists
        if (empty($page->layout)) {
            $page->layout = 'default';
        }
        if (!View::exists("{$this->viewPath}::layouts.{$page->layout}")) {
            $page->layout = 'default';
        }

        // Return the full page
        return view("{$this->viewPath}::modules.pages.default", [
            'page' => $page,
            'layout' => $page->layout,
        ]);
    }


    /**
     * Fetch all blocks of a page and change their publish value to 1
     *
     * @param string $page_id
     *
     * @return PageContent with success message
     */

    public function publish(Request $req){
        $pageid = $req->page_id;
        $pageBlock = DB::table('page_blocks')->where('page_id', '=', $pageid)->update(array('publish' => "1"));
        return redirect()->back()->with([
            'message' => __('Successfully Published'),
            'alert-type' => 'success',
        ]);
    }


    /**
     * Fetch all blocks of a page and and show them on new tab
     *
     * @param string $page_id
     *
     * @return PageContent on new tab
     */

    public function preview(Request $req){
        $pageid = $req->page_id;
        $page = Page::where('id', '=', $pageid)->firstOrFail();
        $blocks = $page->blocks()
            ->where('is_hidden', '=', '0')
            ->orderBy('order', 'asc')
            ->get()
            ->map(function ($block) {
                return (object)[
                    'id' => $block->id,
                    'page_id' => $block->page_id,
                    'updated_at' => $block->updated_at,
                    'cache_ttl' => $block->cache_ttl,
                    'template' => $block->template()->template,
                    'data' => $block->cachedData,
                    'path' => $block->path,
                    'type' => $block->type,
                    'publish' => $block->publish,
                ];
            });

        // Override standard body content, with page block content
        $page['body'] = view('vendor.voyager-page-blocks.preview', [
            'page' => $page,
            'blocks' => $this->prepareEachBlock($blocks),
        ]);

        // Check that the page Layout and its View exists
        if (empty($page->layout)) {
            $page->layout = 'preview';
        }
        if (!View::exists("vendor.voyager-page-blocks.preview")) {
            $page->layout = 'preview';
        }


        // Return the full page
        return view('vendor.voyager-page-blocks.preview', [
            'page' => $page,
            'layout' => $page->layout,
            'blocks' => $this->prepareEachBlock($blocks),

        ]);

    }

}
