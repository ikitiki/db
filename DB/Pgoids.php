<?php
// must be build manually or automatically
return [
    16 => 'bool',
    17 => 'bytea',
    18 => 'char',
    19 => 'name',
    20 => 'int8',
    21 => 'int2',
    22 => 'int2vector',
    23 => 'int4',
    24 => 'regproc',
    25 => 'text',
    26 => 'oid',
    27 => 'tid',
    28 => 'xid',
    29 => 'cid',
    30 => 'oidvector',
    71 => 'pg_type',
    75 => 'pg_attribute',
    81 => 'pg_proc',
    83 => 'pg_class',
    114 => 'json',
    142 => 'xml',
    143 => '_xml',
    199 => '_json',
    194 => 'pg_node_tree',
    210 => 'smgr',
    600 => 'point',
    601 => 'lseg',
    602 => 'path',
    603 => 'box',
    604 => 'polygon',
    628 => 'line',
    629 => '_line',
    700 => 'float4',
    701 => 'float8',
    702 => 'abstime',
    703 => 'reltime',
    704 => 'tinterval',
    705 => 'unknown',
    718 => 'circle',
    719 => '_circle',
    790 => 'money',
    791 => '_money',
    829 => 'macaddr',
    869 => 'inet',
    650 => 'cidr',
    1000 => '_bool',
    1001 => '_bytea',
    1002 => '_char',
    1003 => '_name',
    1005 => '_int2',
    1006 => '_int2vector',
    1007 => '_int4',
    1008 => '_regproc',
    1009 => '_text',
    1028 => '_oid',
    1010 => '_tid',
    1011 => '_xid',
    1012 => '_cid',
    1013 => '_oidvector',
    1014 => '_bpchar',
    1015 => '_varchar',
    1016 => '_int8',
    1017 => '_point',
    1018 => '_lseg',
    1019 => '_path',
    1020 => '_box',
    1021 => '_float4',
    1022 => '_float8',
    1023 => '_abstime',
    1024 => '_reltime',
    1025 => '_tinterval',
    1027 => '_polygon',
    1033 => 'aclitem',
    1034 => '_aclitem',
    1040 => '_macaddr',
    1041 => '_inet',
    651 => '_cidr',
    1263 => '_cstring',
    1042 => 'bpchar',
    1043 => 'varchar',
    1082 => 'date',
    1083 => 'time',
    1114 => 'timestamp',
    1115 => '_timestamp',
    1182 => '_date',
    1183 => '_time',
    1184 => 'timestamptz',
    1185 => '_timestamptz',
    1186 => 'interval',
    1187 => '_interval',
    1231 => '_numeric',
    1266 => 'timetz',
    1270 => '_timetz',
    1560 => 'bit',
    1561 => '_bit',
    1562 => 'varbit',
    1563 => '_varbit',
    1700 => 'numeric',
    1790 => 'refcursor',
    2201 => '_refcursor',
    2202 => 'regprocedure',
    2203 => 'regoper',
    2204 => 'regoperator',
    2205 => 'regclass',
    2206 => 'regtype',
    2207 => '_regprocedure',
    2208 => '_regoper',
    2209 => '_regoperator',
    2210 => '_regclass',
    2211 => '_regtype',
    2950 => 'uuid',
    2951 => '_uuid',
    3614 => 'tsvector',
    3642 => 'gtsvector',
    3615 => 'tsquery',
    3734 => 'regconfig',
    3769 => 'regdictionary',
    3643 => '_tsvector',
    3644 => '_gtsvector',
    3645 => '_tsquery',
    3735 => '_regconfig',
    3770 => '_regdictionary',
    2970 => 'txid_snapshot',
    2949 => '_txid_snapshot',
    3904 => 'int4range',
    3905 => '_int4range',
    3906 => 'numrange',
    3907 => '_numrange',
    3908 => 'tsrange',
    3909 => '_tsrange',
    3910 => 'tstzrange',
    3911 => '_tstzrange',
    3912 => 'daterange',
    3913 => '_daterange',
    3926 => 'int8range',
    3927 => '_int8range',
    2249 => 'record',
    2287 => '_record',
    2275 => 'cstring',
    2276 => 'any',
    2277 => 'anyarray',
    2278 => 'void',
    2279 => 'trigger',
    3838 => 'event_trigger',
    2280 => 'language_handler',
    2281 => 'internal',
    2282 => 'opaque',
    2283 => 'anyelement',
    2776 => 'anynonarray',
    3500 => 'anyenum',
    3115 => 'fdw_handler',
    3831 => 'anyrange',
    10000 => 'pg_attrdef',
    10001 => 'pg_constraint',
    10002 => 'pg_inherits',
    10003 => 'pg_index',
    10004 => 'pg_operator',
    10005 => 'pg_opfamily',
    10006 => 'pg_opclass',
    10117 => 'pg_am',
    10118 => 'pg_amop',
    10522 => 'pg_amproc',
    10814 => 'pg_language',
    10815 => 'pg_largeobject_metadata',
    10816 => 'pg_largeobject',
    10817 => 'pg_aggregate',
    10818 => 'pg_statistic',
    10819 => 'pg_rewrite',
    10820 => 'pg_trigger',
    10821 => 'pg_event_trigger',
    10822 => 'pg_description',
    10823 => 'pg_cast',
    11020 => 'pg_enum',
    11021 => 'pg_namespace',
    11022 => 'pg_conversion',
    11023 => 'pg_depend',
    1248 => 'pg_database',
    11024 => 'pg_db_role_setting',
    11025 => 'pg_tablespace',
    11026 => 'pg_pltemplate',
    2842 => 'pg_authid',
    2843 => 'pg_auth_members',
    11027 => 'pg_shdepend',
    11028 => 'pg_shdescription',
    11029 => 'pg_ts_config',
    11030 => 'pg_ts_config_map',
    11031 => 'pg_ts_dict',
    11032 => 'pg_ts_parser',
    11033 => 'pg_ts_template',
    11034 => 'pg_extension',
    11035 => 'pg_foreign_data_wrapper',
    11036 => 'pg_foreign_server',
    11037 => 'pg_user_mapping',
    11038 => 'pg_foreign_table',
    11039 => 'pg_default_acl',
    11040 => 'pg_seclabel',
    11041 => 'pg_shseclabel',
    11042 => 'pg_collation',
    11043 => 'pg_range',
    11044 => 'pg_toast_2604',
    11045 => 'pg_toast_2606',
    11046 => 'pg_toast_2609',
    11047 => 'pg_toast_1255',
    11048 => 'pg_toast_2618',
    11049 => 'pg_toast_3596',
    11050 => 'pg_toast_2619',
    11051 => 'pg_toast_2620',
    11052 => 'pg_toast_2396',
    11053 => 'pg_toast_2964',
    11055 => 'pg_roles',
    11058 => 'pg_shadow',
    11061 => 'pg_group',
    11064 => 'pg_user',
    11067 => 'pg_rules',
    11071 => 'pg_views',
    11075 => 'pg_tables',
    11079 => 'pg_matviews',
    11083 => 'pg_indexes',
    11087 => 'pg_stats',
    11091 => 'pg_locks',
    11094 => 'pg_cursors',
    11097 => 'pg_available_extensions',
    11100 => 'pg_available_extension_versions',
    11103 => 'pg_prepared_xacts',
    11107 => 'pg_prepared_statements',
    11110 => 'pg_seclabels',
    11114 => 'pg_settings',
    11119 => 'pg_timezone_abbrevs',
    11122 => 'pg_timezone_names',
    11125 => 'pg_stat_all_tables',
    11129 => 'pg_stat_xact_all_tables',
    11133 => 'pg_stat_sys_tables',
    11137 => 'pg_stat_xact_sys_tables',
    11140 => 'pg_stat_user_tables',
    11144 => 'pg_stat_xact_user_tables',
    11147 => 'pg_statio_all_tables',
    11151 => 'pg_statio_sys_tables',
    11154 => 'pg_statio_user_tables',
    11157 => 'pg_stat_all_indexes',
    11161 => 'pg_stat_sys_indexes',
    11164 => 'pg_stat_user_indexes',
    11167 => 'pg_statio_all_indexes',
    11171 => 'pg_statio_sys_indexes',
    11174 => 'pg_statio_user_indexes',
    11177 => 'pg_statio_all_sequences',
    11181 => 'pg_statio_sys_sequences',
    11184 => 'pg_statio_user_sequences',
    11187 => 'pg_stat_activity',
    11190 => 'pg_stat_replication',
    11193 => 'pg_stat_database',
    11196 => 'pg_stat_database_conflicts',
    11199 => 'pg_stat_user_functions',
    11203 => 'pg_stat_xact_user_functions',
    11207 => 'pg_stat_bgwriter',
    11210 => 'pg_user_mappings',
    11535 => 'cardinal_number',
    11537 => 'character_data',
    11538 => 'sql_identifier',
    11540 => 'information_schema_catalog_name',
    11542 => 'time_stamp',
    11543 => 'yes_or_no',
    11546 => 'applicable_roles',
    11550 => 'administrable_role_authorizations',
    11553 => 'attributes',
    11557 => 'character_sets',
    11561 => 'check_constraint_routine_usage',
    11565 => 'check_constraints',
    11569 => 'collations',
    11572 => 'collation_character_set_applicability',
    11575 => 'column_domain_usage',
    11579 => 'column_privileges',
    11583 => 'column_udt_usage',
    11587 => 'columns',
    11591 => 'constraint_column_usage',
    11595 => 'constraint_table_usage',
    11599 => 'domain_constraints',
    11603 => 'domain_udt_usage',
    11606 => 'domains',
    11610 => 'enabled_roles',
    11613 => 'key_column_usage',
    11617 => 'parameters',
    11621 => 'referential_constraints',
    11625 => 'role_column_grants',
    11628 => 'routine_privileges',
    11632 => 'role_routine_grants',
    11635 => 'routines',
    11639 => 'schemata',
    11642 => 'sequences',
    11646 => 'sql_features',
    11648 => 'pg_toast_11645',
    11651 => 'sql_implementation_info',
    11653 => 'pg_toast_11650',
    11656 => 'sql_languages',
    11658 => 'pg_toast_11655',
    11661 => 'sql_packages',
    11663 => 'pg_toast_11660',
    11666 => 'sql_parts',
    11668 => 'pg_toast_11665',
    11671 => 'sql_sizing',
    11673 => 'pg_toast_11670',
    11676 => 'sql_sizing_profiles',
    11678 => 'pg_toast_11675',
    11681 => 'table_constraints',
    11685 => 'table_privileges',
    11689 => 'role_table_grants',
    11692 => 'tables',
    11696 => 'triggered_update_columns',
    11700 => 'triggers',
    11704 => 'udt_privileges',
    11708 => 'role_udt_grants',
    11711 => 'usage_privileges',
    11715 => 'role_usage_grants',
    11718 => 'user_defined_types',
    11722 => 'view_column_usage',
    11726 => 'view_routine_usage',
    11730 => 'view_table_usage',
    11734 => 'views',
    11738 => 'data_type_privileges',
    11742 => 'element_types',
    11746 => '_pg_foreign_table_columns',
    11750 => 'column_options',
    11753 => '_pg_foreign_data_wrappers',
    11756 => 'foreign_data_wrapper_options',
    11759 => 'foreign_data_wrappers',
    11762 => '_pg_foreign_servers',
    11766 => 'foreign_server_options',
    11769 => 'foreign_servers',
    11772 => '_pg_foreign_tables',
    11776 => 'foreign_table_options',
    11779 => 'foreign_tables',
    11782 => '_pg_user_mappings',
    11785 => 'user_mapping_options',
    11789 => 'user_mappings',
    16386 => 'hstore',
    16391 => '_hstore',
    16467 => 'ghstore',
    16470 => '_ghstore',
];