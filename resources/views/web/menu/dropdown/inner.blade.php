@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        $listItemClass = 'nav-item';
        if(!$originalItem->children->isEmpty()) {

            if(url($item->link()) == url()->current()){
                $listItemClass = 'nav-item dropdown active';
            }else{
                $listItemClass = 'nav-item dropdown';
            }
        }

    @endphp
    @if(!$originalItem->children->isEmpty())
        @if(!isset($innerLoop))
            <li class="{{ $listItemClass }}">
                <a class="nav-link dropdown-toggle" href="{{ url($item->link()) }}" id="navbardrop" data-toggle="dropdown">{{ $item->title }}</a>
                <div class="dropdown-menu">
                    @include('web.menu.dropdown.inner', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
                </div>
            </li>
        @else
            <a class="dropdown-item dropdown-toggle" href="{{ url($item->link()) }}" data-toggle="dropdown">{{ $item->title }}</a>
            <div class="dropdown-menu">
                @include('web.menu.dropdown.inner', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
            </div>
        @endif
    @else
        @if(!isset($innerLoop))
            <li class="{{ $listItemClass }}">
                <a class="nav-link" href="{{ url($item->link()) }}">{{ $item->title }}</a>
            </li>
        @else
            <a class="dropdown-item" href="{{ url($item->link()) }}">{{ $item->title }}</a>
        @endif    
    @endif
@endforeach
