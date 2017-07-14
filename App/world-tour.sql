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
-- Name: migrations; Type: TABLE; Schema: public; Owner: blakea
--

CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO blakea;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: blakea
--

CREATE SEQUENCE migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE migrations_id_seq OWNER TO blakea;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: blakea
--

ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: blakea
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE password_resets OWNER TO blakea;

--
-- Name: stops; Type: TABLE; Schema: public; Owner: blakea
--

CREATE TABLE stops (
    id integer NOT NULL,
    tours_id integer NOT NULL,
    "when" timestamp(0) without time zone NOT NULL,
    "where" character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE stops OWNER TO blakea;

--
-- Name: stops_id_seq; Type: SEQUENCE; Schema: public; Owner: blakea
--

CREATE SEQUENCE stops_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE stops_id_seq OWNER TO blakea;

--
-- Name: stops_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: blakea
--

ALTER SEQUENCE stops_id_seq OWNED BY stops.id;


--
-- Name: tours; Type: TABLE; Schema: public; Owner: blakea
--

CREATE TABLE tours (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE tours OWNER TO blakea;

--
-- Name: tours_id_seq; Type: SEQUENCE; Schema: public; Owner: blakea
--

CREATE SEQUENCE tours_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tours_id_seq OWNER TO blakea;

--
-- Name: tours_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: blakea
--

ALTER SEQUENCE tours_id_seq OWNED BY tours.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: blakea
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


ALTER TABLE users OWNER TO blakea;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: blakea
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO blakea;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: blakea
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);


--
-- Name: stops id; Type: DEFAULT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY stops ALTER COLUMN id SET DEFAULT nextval('stops_id_seq'::regclass);


--
-- Name: tours id; Type: DEFAULT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY tours ALTER COLUMN id SET DEFAULT nextval('tours_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: blakea
--

COPY migrations (id, migration, batch) FROM stdin;
5	2014_10_12_000000_create_users_table	1
6	2014_10_12_100000_create_password_resets_table	1
7	2017_07_14_121138_create_tours_table	1
8	2017_07_14_121217_create_stops_table	1
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: blakea
--

SELECT pg_catalog.setval('migrations_id_seq', 8, true);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: blakea
--

COPY password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: stops; Type: TABLE DATA; Schema: public; Owner: blakea
--

COPY stops (id, tours_id, "when", "where", created_at, updated_at) FROM stdin;
1	1	2017-07-01 00:00:00	Blakes House	2017-07-14 13:03:54	2017-07-14 13:03:54
2	2	2017-08-01 00:00:00	Yum Center	2017-07-14 13:03:54	2017-07-14 13:03:54
3	3	2017-09-01 00:00:00	Bastille	2017-07-14 13:03:54	2017-07-14 13:03:54
4	4	2018-10-01 00:00:00	Big Ben	2017-07-14 13:03:54	2017-07-14 13:03:54
5	1	2018-01-01 00:00:00	Hooters	2017-07-14 13:03:54	2017-07-14 13:03:54
6	3	2018-02-01 00:00:00	Eiffel Tower	2017-07-14 13:03:54	2017-07-14 13:03:54
\.


--
-- Name: stops_id_seq; Type: SEQUENCE SET; Schema: public; Owner: blakea
--

SELECT pg_catalog.setval('stops_id_seq', 6, true);


--
-- Data for Name: tours; Type: TABLE DATA; Schema: public; Owner: blakea
--

COPY tours (id, name, created_at, updated_at) FROM stdin;
1	Lexington	2017-07-14 13:03:06	2017-07-14 13:03:06
2	Louisville	2017-07-14 13:03:06	2017-07-14 13:03:06
3	Paris	2017-07-14 13:03:06	2017-07-14 13:03:06
4	London	2017-07-14 13:03:06	2017-07-14 13:03:06
5	Lexington	2017-07-14 13:03:54	2017-07-14 13:03:54
6	Louisville	2017-07-14 13:03:54	2017-07-14 13:03:54
7	Paris	2017-07-14 13:03:54	2017-07-14 13:03:54
8	London	2017-07-14 13:03:54	2017-07-14 13:03:54
\.


--
-- Name: tours_id_seq; Type: SEQUENCE SET; Schema: public; Owner: blakea
--

SELECT pg_catalog.setval('tours_id_seq', 8, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: blakea
--

COPY users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: blakea
--

SELECT pg_catalog.setval('users_id_seq', 1, false);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: stops stops_pkey; Type: CONSTRAINT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_pkey PRIMARY KEY (id);


--
-- Name: tours tours_pkey; Type: CONSTRAINT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY tours
    ADD CONSTRAINT tours_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: blakea
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: stops stops_tours_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: blakea
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_tours_id_foreign FOREIGN KEY (tours_id) REFERENCES tours(id);


--
-- PostgreSQL database dump complete
--

