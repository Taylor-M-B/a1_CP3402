ALTER TABLE `#__a1s_details` ADD COLUMN `checked_out` int(10) unsigned NOT NULL DEFAULT 0 AFTER `alias`;

ALTER TABLE `#__a1s_details` ADD COLUMN `checked_out_time` datetime AFTER `alias`;

ALTER TABLE `#__a1s_details` ADD KEY `idx_checkout` (`checked_out`);
