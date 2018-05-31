--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.4
-- Dumped by pg_dump version 9.6.4

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
-- Name: alunos; Type: TABLE; Schema: public; Owner: juciellen
--

CREATE TABLE alunos (
    id integer NOT NULL,
    email character varying,
    senha character varying
);


ALTER TABLE alunos OWNER TO juciellen;

--
-- Name: alunos_id_seq; Type: SEQUENCE; Schema: public; Owner: juciellen
--

CREATE SEQUENCE alunos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE alunos_id_seq OWNER TO juciellen;

--
-- Name: alunos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: juciellen
--

ALTER SEQUENCE alunos_id_seq OWNED BY alunos.id;


--
-- Name: alunos id; Type: DEFAULT; Schema: public; Owner: juciellen
--

ALTER TABLE ONLY alunos ALTER COLUMN id SET DEFAULT nextval('alunos_id_seq'::regclass);


--
-- Data for Name: alunos; Type: TABLE DATA; Schema: public; Owner: juciellen
--

COPY alunos (id, email, senha) FROM stdin;
4	maria@gmail.com	22222
5	maria@gmail.com	22222
8	lucas@4linux.com.br	333
9	marcos@4linux.com.br	44444
6	juciellen.cabrera@4linux.com.br	77777
\.


--
-- Name: alunos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: juciellen
--

SELECT pg_catalog.setval('alunos_id_seq', 9, true);


--
-- Name: alunos alunos_pkey; Type: CONSTRAINT; Schema: public; Owner: juciellen
--

ALTER TABLE ONLY alunos
    ADD CONSTRAINT alunos_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

