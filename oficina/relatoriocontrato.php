*
<SELEct> a.data,a.hora,c.nome
from agenda a,servicos s, cliente s, cliente c 
WHERE
a.idcliente = c.idcliente and
a.idservico = s.idservico;
