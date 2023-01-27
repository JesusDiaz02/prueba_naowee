
1 Seleccionar los clientes que tengan dirección.
select CustomerID,AddressID 
from SalesLT.CustomerAddress

2. Seleccionar los clientes que tengan facturas.
select CustomerID, SalesOrderNumber 
from SalesLT.SalesOrderHeader

3. Seleccionar los clientes cuyas ventas sean mayores a 3000
select CustomerID, TotalDue
from SalesLT.SalesOrderHeader
where TotalDue > 3000

4.Seleccionar los clientes cuyo primer nombre empiece por la letra A o J:

select CustomerID, FirstName
from SalesLT.Customer
where (FirstName like 'A%') or (FirstName like 'J%')

5. Seleccionar la cantidad de productos por categoría.
select ProductCategoryID, COUNT(*)
from SalesLT.Product
group by ProductCategoryID

6. Seleccionar las direcciones (SalesLT.Address) cuyo tipo (AddressType) es Shipping . El
resultado debe ser ordenado por StateProvince en orden alfabético

select AddressLine1, AddressType, StateProvince
from SalesLT.Address , SalesLT.CustomerAddress
where AddressType = 'Shipping'
order by StateProvince

7. Seleccionar todas las facturas cuya cantidad de ítems sea mayor o igual que 5
select SalesOrderID, count(OrderQty)
from SalesLT.SalesOrderDetail
group by SalesOrderID
having count(OrderQty)>=5



