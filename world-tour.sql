--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.3
-- Dumped by pg_dump version 9.6.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: robbieb
--

CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO robbieb;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: robbieb
--

CREATE SEQUENCE migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE migrations_id_seq OWNER TO robbieb;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: robbieb
--

ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: robbieb
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE password_resets OWNER TO robbieb;

--
-- Name: stops; Type: TABLE; Schema: public; Owner: robbieb
--

CREATE TABLE stops (
    id integer NOT NULL,
    tour_id integer NOT NULL,
    "when" timestamp(0) without time zone NOT NULL,
    "where" character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE stops OWNER TO robbieb;

--
-- Name: stops_id_seq; Type: SEQUENCE; Schema: public; Owner: robbieb
--

CREATE SEQUENCE stops_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE stops_id_seq OWNER TO robbieb;

--
-- Name: stops_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: robbieb
--

ALTER SEQUENCE stops_id_seq OWNED BY stops.id;


--
-- Name: tours; Type: TABLE; Schema: public; Owner: robbieb
--

CREATE TABLE tours (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE tours OWNER TO robbieb;

--
-- Name: tours_id_seq; Type: SEQUENCE; Schema: public; Owner: robbieb
--

CREATE SEQUENCE tours_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tours_id_seq OWNER TO robbieb;

--
-- Name: tours_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: robbieb
--

ALTER SEQUENCE tours_id_seq OWNED BY tours.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: robbieb
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE users OWNER TO robbieb;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: robbieb
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO robbieb;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: robbieb
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);


--
-- Name: stops id; Type: DEFAULT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY stops ALTER COLUMN id SET DEFAULT nextval('stops_id_seq'::regclass);


--
-- Name: tours id; Type: DEFAULT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY tours ALTER COLUMN id SET DEFAULT nextval('tours_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: robbieb
--

COPY migrations (id, migration, batch) FROM stdin;
8	2014_10_12_000000_create_users_table	1
9	2014_10_12_100000_create_password_resets_table	1
10	2017_07_14_121815_create_tours_table	1
11	2017_07_14_122010_create_stops_table	1
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: robbieb
--

SELECT pg_catalog.setval('migrations_id_seq', 11, true);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: robbieb
--

COPY password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: stops; Type: TABLE DATA; Schema: public; Owner: robbieb
--

COPY stops (id, tour_id, "when", "where", created_at, updated_at) FROM stdin;
2	1	2017-12-02 00:00:00	Yoyogi Park	2017-07-14 13:16:22	2017-07-14 13:16:22
3	1	2017-12-03 00:00:00	Shinjuku Gyoen National Garden	2017-07-14 13:16:22	2017-07-14 13:16:22
4	2	2018-01-01 00:00:00	Times Square	2017-07-14 13:16:22	2017-07-14 13:16:22
5	2	2018-01-02 00:00:00	Central Park	2017-07-14 13:16:22	2017-07-14 13:16:22
6	2	2018-01-03 00:00:00	Grand Central Station	2017-07-14 13:16:22	2017-07-14 13:16:22
8	1	2017-01-01 01:00:00	ching chong theatre	2017-07-14 15:06:40	2017-07-14 15:06:40
1	1	2017-12-01 00:00:00	Tokyo Towers	2017-07-14 13:16:22	2017-07-14 15:51:52
\.


--
-- Name: stops_id_seq; Type: SEQUENCE SET; Schema: public; Owner: robbieb
--

SELECT pg_catalog.setval('stops_id_seq', 12, true);


--
-- Data for Name: tours; Type: TABLE DATA; Schema: public; Owner: robbieb
--

COPY tours (id, name, created_at, updated_at) FROM stdin;
1	Tokyo	2017-07-14 13:16:22	2017-07-14 13:16:22
2	New York	2017-07-14 13:16:22	2017-07-14 13:16:22
\.


--
-- Name: tours_id_seq; Type: SEQUENCE SET; Schema: public; Owner: robbieb
--

SELECT pg_catalog.setval('tours_id_seq', 4, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: robbieb
--

COPY users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
1	robbie	bryarboert@gmail.com	$2y$10$CeGltxpZdw9Zm0fYZoxX3OCaF4hBFZFNKDRVj4sDP6U5SEdfaLgh2	GduAslSG1d4XoiZ8LHQciiOK3s1ar7LnlXCqj5aEYApi8gt7aG8DYIvJz3nh	2017-07-14 13:27:57	2017-07-14 13:27:57
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: robbieb
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: stops stops_pkey; Type: CONSTRAINT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_pkey PRIMARY KEY (id);


--
-- Name: tours tours_pkey; Type: CONSTRAINT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY tours
    ADD CONSTRAINT tours_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: robbieb
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: stops stops_tour_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: robbieb
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_tour_id_foreign FOREIGN KEY (tour_id) REFERENCES tours(id);


--
-- PostgreSQL database dump complete
--

