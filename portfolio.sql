drop table if exists projetcs;

CREATE TABLE projects (
	project_id varchar(1024) NOT NULL,
	project_name varchar(1024) NOT NULL,
	sub_proj varchar(4096)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE sub_projects (
	project_id varchar(1024) NOT NULL,
	project_name varchar(1024) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE description (
	project_name varchar(1024) NOT NULL,
	project_description LONGTEXT
) ENGINE = InnoDB DEFAULT CHARSET=utf8;