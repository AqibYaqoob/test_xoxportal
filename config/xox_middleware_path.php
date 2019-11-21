<?php

return [
	// 1) Get token
	'token' => 'xox_id/token',
	// 2) Verify token
	'verify_token' => 'xox_id/validate_token',
	// 3) Get Subscribers Profile record
	'subscriber_profile' => 'black_app/subscriber/get_profile',
	// 4) Change Password
	'change_password' => 'xox_id/change_password',
	// 5) Bill History
	'bill_history' => 'black_app/billed/get_bill_payment_query',
	// 6) Download Bill Details
	'bill_download' => 'black_app/billed/get_bill_payment',
	// 7) View All Numbers for Subscriber
	'view_subscriber_numbers' => 'black_app/subscriber/get_msisdn_by_nric',
	// 8) Get Profile
	'IDCSlogin' => 'black_app/idcs/login',
	// 9) Revoke Profile
	'revoke_profile' => 'black_app/idcs/revoke_profile',
	// 10) Upgrade_Downgrade_Plan - Plan Info Detail
	'upgradeDowngradePlaneList' => 'black_app/upgrade_download_plan/list',
	// 11) Rrequest To Upgrade_Downgrade_Plan - Plan
	'requestUpgradeDowngradePlan' => 'black_app/upgrade_download_plan/request',
];
