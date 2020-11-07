use Employees;
-- 14
SELECT max(dept.deptno), avg(emp.sal) FROM dept INNER JOIN emp ON dept.deptno IN (SELECT deptno FROM emp);
-- 16
SELECT ename, deptno, sal, job FROM emp WHERE job = (SELECT job FROM emp WHERE ename = "jones");