use Employees;
SET lc_time_names = 'fr_FR';
-- ALLEN
SELECT dept.DNAME FROM emp INNER JOIN dept ON emp.DEPTNO = dept.DEPTNO WHERE emp.ENAME = "ALLEN";
-- dept and salaire 
SELECT emp.ENAME, emp.JOB, emp.SAL, dept.DNAME FROM emp INNER JOIN dept ON emp.DEPTNO = dept.DEPTNO ORDER BY dept.DNAME, emp.SAL DESC;
-- SALESMAN
SELECT emp.ENAME, emp.SAL, emp.COMM , emp.COMM+emp.SAL FROM dept INNER JOIN emp ON emp.DEPTNO = dept.DEPTNO WHERE dept.DNAME = "SALES";
-- 12
SELECT emp.ENAME, emp.JOB, date_format(emp.HIREDATE, '%a %e %b %X') FROM dept INNER JOIN emp ON emp.DEPTNO = emp.DEPTNO WHERE dept.DEPTNO = 20; 
-- 13
SELECT dept.DNAME , emp.SAL FROM dept INNER JOIN emp ON emp.DEPTNO = dept.DEPTNO ORDER BY emp.SAL DESC;

SELECT dept.DNAME , emp.SAL FROM emp INNER JOIN dept ON emp.DEPTNO = dept.DEPTNO  AND ( dept.DNAME LIMIT 1) ORDER BY emp.SAL DESC;
-- 14