CREATE SEQUENCE quiniela.sf_guard_group_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE quiniela.sf_guard_group_id OWNER TO apdetodo_admin;

CREATE SEQUENCE quiniela.sf_guard_group_permission_id
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE quiniela.sf_guard_group_permission_id OWNER TO apdetodo_admin;

CREATE SEQUENCE quiniela.sf_guard_permission_id
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE quiniela.sf_guard_permission_id OWNER TO apdetodo_admin;

CREATE SEQUENCE quiniela.sf_guard_remember_key_id
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE quiniela.sf_guard_remember_key_id OWNER TO apdetodo_admin;

CREATE SEQUENCE quiniela.sf_guard_user_id
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE quiniela.sf_guard_user_id OWNER TO apdetodo_admin;

CREATE SEQUENCE quiniela.sf_guard_user_group_id
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE quiniela.sf_guard_user_group_id OWNER TO apdetodo_admin;

CREATE SEQUENCE quiniela.sf_guard_user_permission_id
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE quiniela.sf_guard_user_permission_id OWNER TO apdetodo_admin;


CREATE TABLE quiniela.sf_guard_group (id INT NOT NULL DEFAULT nextval('quiniela.sf_guard_group_id'::regclass), name TEXT, description TEXT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE quiniela.sf_guard_group_permission (group_id INT NOT NULL DEFAULT nextval('quiniela.sf_guard_group_permission_id'::regclass), permission_id INT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(group_id, permission_id));
CREATE TABLE quiniela.sf_guard_permission (id INT NOT NULL DEFAULT nextval('quiniela.sf_guard_permission_id'::regclass), name TEXT, description TEXT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE quiniela.sf_guard_remember_key (id INT NOT NULL DEFAULT nextval('quiniela.sf_guard_remember_key_id'::regclass), user_id INT, remember_key TEXT, ip_address TEXT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id, ip_address));
CREATE TABLE quiniela.sf_guard_user (id INT NOT NULL DEFAULT nextval('quiniela.sf_guard_user_id'::regclass), username TEXT NOT NULL, algorithm TEXT DEFAULT 'sha1' NOT NULL, salt TEXT, password TEXT, is_active BOOLEAN DEFAULT 'true', is_super_admin BOOLEAN DEFAULT 'false', last_login TIMESTAMP, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE quiniela.sf_guard_user_group (user_id INT NOT NULL DEFAULT nextval('quiniela.sf_guard_user_group_id'::regclass), group_id INT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, group_id));
CREATE TABLE quiniela.sf_guard_user_permission (user_id INT NOT NULL DEFAULT nextval('quiniela.sf_guard_user_permission_id'::regclass), permission_id INT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, permission_id));


ALTER TABLE quiniela.sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE quiniela.sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE quiniela.sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE quiniela.sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE quiniela.sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE quiniela.sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE quiniela.sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
