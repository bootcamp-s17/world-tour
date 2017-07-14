--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.7
-- Dumped by pg_dump version 9.5.7

SET statement_timeout = 0;
SET lock_timeout = 0;
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
-- Name: migrations; Type: TABLE; Schema: public; Owner: brandons
--

CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO brandons;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: brandons
--

CREATE SEQUENCE migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE migrations_id_seq OWNER TO brandons;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: brandons
--

ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: brandons
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE password_resets OWNER TO brandons;

--
-- Name: stops; Type: TABLE; Schema: public; Owner: brandons
--

CREATE TABLE stops (
    id integer NOT NULL,
    "when" timestamp(0) without time zone NOT NULL,
    "where" character varying(255) NOT NULL,
    tour_id integer NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE stops OWNER TO brandons;

--
-- Name: stops_id_seq; Type: SEQUENCE; Schema: public; Owner: brandons
--

CREATE SEQUENCE stops_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE stops_id_seq OWNER TO brandons;

--
-- Name: stops_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: brandons
--

ALTER SEQUENCE stops_id_seq OWNED BY stops.id;


--
-- Name: tours; Type: TABLE; Schema: public; Owner: brandons
--

CREATE TABLE tours (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE tours OWNER TO brandons;

--
-- Name: tours_id_seq; Type: SEQUENCE; Schema: public; Owner: brandons
--

CREATE SEQUENCE tours_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tours_id_seq OWNER TO brandons;

--
-- Name: tours_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: brandons
--

ALTER SEQUENCE tours_id_seq OWNED BY tours.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: brandons
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


ALTER TABLE users OWNER TO brandons;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: brandons
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO brandons;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: brandons
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY stops ALTER COLUMN id SET DEFAULT nextval('stops_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY tours ALTER COLUMN id SET DEFAULT nextval('tours_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: brandons
--

COPY migrations (id, migration, batch) FROM stdin;
5	2014_10_12_000000_create_users_table	1
6	2014_10_12_100000_create_password_resets_table	1
7	2017_07_14_121619_create_tours_table	1
8	2017_07_14_121636_create_stops_table	1
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: brandons
--

SELECT pg_catalog.setval('migrations_id_seq', 8, true);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: brandons
--

COPY password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: stops; Type: TABLE DATA; Schema: public; Owner: brandons
--

COPY stops (id, "when", "where", tour_id, deleted_at, created_at, updated_at) FROM stdin;
1	2017-07-24 00:00:00	Lexington KY	1	\N	2017-07-14 13:15:04	2017-07-14 13:15:04
2	2017-08-10 00:00:00	Brooklyn NY	1	\N	2017-07-14 13:15:04	2017-07-14 13:15:04
3	2017-09-01 00:00:00	Barcelona Spain	2	\N	2017-07-14 13:15:04	2017-07-14 13:15:04
4	2017-09-10 00:00:00	St John USVI	2	\N	2017-07-14 13:15:04	2017-07-14 13:15:04
\.


--
-- Name: stops_id_seq; Type: SEQUENCE SET; Schema: public; Owner: brandons
--

SELECT pg_catalog.setval('stops_id_seq', 4, true);


--
-- Data for Name: tours; Type: TABLE DATA; Schema: public; Owner: brandons
--

COPY tours (id, name, deleted_at, created_at, updated_at) FROM stdin;
1	World Domination Tour	\N	2017-07-14 13:14:53	2017-07-14 13:14:53
2	Around the World in a Day	\N	2017-07-14 10:17:50	2017-07-14 10:18:18
3	Best Tour Evar	\N	2017-07-14 15:30:50	2017-07-14 15:30:50
\.


--
-- Name: tours_id_seq; Type: SEQUENCE SET; Schema: public; Owner: brandons
--

SELECT pg_catalog.setval('tours_id_seq', 3, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: brandons
--

COPY users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
1	Brandon	brandon@brandon.com	$2y$10$MumM6bTDcjErUnaJNKI8HOToN0NNW6IwzSh..vlI6/70tfZnAHmoC	8l2oY3zqggsk1Y4ZRsWngf5koUxKPJgTNMkTCsxzWJo47XZZ6O8v4MFUY0yR	2017-07-14 14:03:36	2017-07-14 14:03:36
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: brandons
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- Name: migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: stops_pkey; Type: CONSTRAINT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_pkey PRIMARY KEY (id);


--
-- Name: tours_name_unique; Type: CONSTRAINT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY tours
    ADD CONSTRAINT tours_name_unique UNIQUE (name);


--
-- Name: tours_pkey; Type: CONSTRAINT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY tours
    ADD CONSTRAINT tours_pkey PRIMARY KEY (id);


--
-- Name: users_email_unique; Type: CONSTRAINT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: brandons
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: stops_tour_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: brandons
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_tour_id_foreign FOREIGN KEY (tour_id) REFERENCES tours(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

