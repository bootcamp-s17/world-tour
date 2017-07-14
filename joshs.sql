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
-- Name: migrations; Type: TABLE; Schema: public; Owner: joshs
--

CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO joshs;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: joshs
--

CREATE SEQUENCE migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE migrations_id_seq OWNER TO joshs;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: joshs
--

ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: joshs
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE password_resets OWNER TO joshs;

--
-- Name: stops; Type: TABLE; Schema: public; Owner: joshs
--

CREATE TABLE stops (
    id integer NOT NULL,
    tour_id integer NOT NULL,
    date timestamp(0) without time zone NOT NULL,
    location character varying(255) NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE stops OWNER TO joshs;

--
-- Name: stops_id_seq; Type: SEQUENCE; Schema: public; Owner: joshs
--

CREATE SEQUENCE stops_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE stops_id_seq OWNER TO joshs;

--
-- Name: stops_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: joshs
--

ALTER SEQUENCE stops_id_seq OWNED BY stops.id;


--
-- Name: tours; Type: TABLE; Schema: public; Owner: joshs
--

CREATE TABLE tours (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE tours OWNER TO joshs;

--
-- Name: tours_id_seq; Type: SEQUENCE; Schema: public; Owner: joshs
--

CREATE SEQUENCE tours_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tours_id_seq OWNER TO joshs;

--
-- Name: tours_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: joshs
--

ALTER SEQUENCE tours_id_seq OWNED BY tours.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: joshs
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


ALTER TABLE users OWNER TO joshs;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: joshs
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO joshs;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: joshs
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);


--
-- Name: stops id; Type: DEFAULT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY stops ALTER COLUMN id SET DEFAULT nextval('stops_id_seq'::regclass);


--
-- Name: tours id; Type: DEFAULT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY tours ALTER COLUMN id SET DEFAULT nextval('tours_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: joshs
--

COPY migrations (id, migration, batch) FROM stdin;
117	2014_10_12_000000_create_users_table	1
118	2014_10_12_100000_create_password_resets_table	1
119	2017_07_14_123042_create_tours_table	1
120	2017_07_14_123100_create_stops_table	1
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: joshs
--

SELECT pg_catalog.setval('migrations_id_seq', 120, true);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: joshs
--

COPY password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: stops; Type: TABLE DATA; Schema: public; Owner: joshs
--

COPY stops (id, tour_id, date, location, deleted_at, created_at, updated_at) FROM stdin;
1	1	2017-12-01 00:00:00	Grand Canyon	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
3	2	2018-05-01 00:00:00	Turnagain Arm, Mt. Alyeska & Talkeetna 	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
4	1	2017-12-03 00:00:00	Las Vegas	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
5	3	2017-08-15 00:00:00	Boston	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
6	3	2017-08-16 00:00:00	Cape Cod	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
7	4	2017-09-30 00:00:00	London	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
8	4	2017-10-01 00:00:00	Edinburgh	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
9	5	2018-04-15 00:00:00	Vatican City	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
10	5	2018-04-16 00:00:00	Pisa and Lucca	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
2	2	2018-05-02 00:00:00	Kenai Fjords National Park	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
\.


--
-- Name: stops_id_seq; Type: SEQUENCE SET; Schema: public; Owner: joshs
--

SELECT pg_catalog.setval('stops_id_seq', 10, true);


--
-- Data for Name: tours; Type: TABLE DATA; Schema: public; Owner: joshs
--

COPY tours (id, name, deleted_at, created_at, updated_at) FROM stdin;
1	Midwest	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
2	Alaska	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
3	New England	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
4	England	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
5	Italy	\N	2017-07-14 13:39:22	2017-07-14 13:39:22
6	France	\N	2017-07-14 11:43:22	2017-07-14 11:43:22
8	Pacific Northwest	\N	2017-07-14 11:43:54	2017-07-14 11:43:54
\.


--
-- Name: tours_id_seq; Type: SEQUENCE SET; Schema: public; Owner: joshs
--

SELECT pg_catalog.setval('tours_id_seq', 22, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: joshs
--

COPY users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
2	New	new@example.com	$2y$10$CdpS5EJgrS1T1Vd/mbCFpuSRgopuQGL2A/UPi3CR1nPuJAfZ19Cii	wIYrE0PEx3tvcEnWuLLwi7k6iQtS29YyPMi5l7fVslhSvcWhJaUO39WbAYiI	2017-07-14 11:36:04	2017-07-14 11:36:04
1	Josh	josh@example.com	$2y$10$mVMoDrpc0.ZHtgcxbx6CcObNgCQTlZtVc6TGEam1QxSUTFuuwav3S	lUMqNPj5xH9dKTviwkbOSCOk5gPgfqhQpDU8SVKTEMI5GrlCvgkoq6t34Vrq	2017-07-14 11:25:53	2017-07-14 11:25:53
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: joshs
--

SELECT pg_catalog.setval('users_id_seq', 2, true);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: stops stops_pkey; Type: CONSTRAINT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_pkey PRIMARY KEY (id);


--
-- Name: tours tours_name_unique; Type: CONSTRAINT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY tours
    ADD CONSTRAINT tours_name_unique UNIQUE (name);


--
-- Name: tours tours_pkey; Type: CONSTRAINT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY tours
    ADD CONSTRAINT tours_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: joshs
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: stops stops_tour_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: joshs
--

ALTER TABLE ONLY stops
    ADD CONSTRAINT stops_tour_id_foreign FOREIGN KEY (tour_id) REFERENCES tours(id);


--
-- PostgreSQL database dump complete
--

