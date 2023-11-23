#
# tt_content
#
CREATE TABLE tt_content
(
	teaser_link       varchar(1024)    DEFAULT ''  NOT NULL,
	teaser_link_label varchar(100)     DEFAULT ''  NOT NULL
);

# sys_file_metadata
#
CREATE TABLE sys_file_metadata
(
	accessibility tinyint(4) DEFAULT '0' NOT NULL
);
