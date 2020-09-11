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
SELECT dept.DNAME, Max(emp.SAL) FROM emp INNER JOIN dept ON emp.DEPTNO = dept.DEPTNO GROUP BY dept.DNAME ORDER BY emp.SAL DESC;
-- 14

-- 16
SELECT ename, deptno, sal, job FROM emp WHERE job = (SELECT job FROM emp WHERE ename = "jones");