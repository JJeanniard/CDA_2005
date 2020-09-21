CREATE DATABASE IF NOT EXISTS Employees CHARSET utf8 COLLATE utf8_general_ci;
USE Employees;

--
-- Structure de la table dept
--

CREATE TABLE IF NOT EXISTS dept (
  DEPTNO int(10) UNSIGNED NOT NULL,
  DNAME varchar(50) NOT NULL,
  LOC varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table emp
--

CREATE TABLE IF NOT EXISTS emp (
  EMPNO int(10) UNSIGNED NOT NULL,
  ENAME varchar(50) NOT NULL,
  JOB varchar(50) NOT NULL,
  MGR int(10) UNSIGNED DEFAULT NULL,
  HIREDATE date NOT NULL,
  SAL decimal(8,2) NOT NULL,
  COMM int(11) DEFAULT NULL,
  DEPTNO int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table dept
--
ALTER TABLE dept
  ADD PRIMARY KEY (DEPTNO);

--
-- Index pour la table emp
--
ALTER TABLE emp
  ADD PRIMARY KEY (EMPNO),
  ADD KEY FK_departement (DEPTNO),
  ADD KEY FK_manager (MGR);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table emp
--
ALTER TABLE emp
  ADD CONSTRAINT FK_departement FOREIGN KEY (DEPTNO) REFERENCES dept (DEPTNO),
  ADD CONSTRAINT FK_manager FOREIGN KEY (MGR) REFERENCES emp (EMPNO);