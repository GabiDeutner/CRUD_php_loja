function build_menu(tp,opc)
{
  var fg_f = new Image;
  fg_f.src = figuras[0];
  
  var bm_f = document.getElementById('build-menu');
  
  var dv_f = document.createElement('div');
  dv_f.style.position = "relative";
  dv_f.setAttribute('id','dv_princ');
  

  var tb_f = document.createElement('table');
  tb_f.setAttribute('id','tb_princ');
  tb_f.width = "100%";
  tb_f.style.height = fg_f.height;
  tb_f.border = "0";
  tb_f.cellSpacing = "0";
  tb_f.cellPadding = "0";

  var tr_f = tb_f.insertRow(0);
  var td_f = new Array(opc.length);
  for(i = 0; i < opc.length; i++)
  {
    td_f[i] = tr_f.insertCell(i);
	td_f[i].style.background = 'url('+figuras[0]+')';
	
	td_f[i].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	td_f[i].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (opc[i].href != null)
      td_f[i].innerHTML = '<a href="'+opc[i].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>'+opc[i].descricao+'</b></font></div></a>';	
	else
      td_f[i].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>'+opc[i].descricao+'</b></font></div>';	
	
	if (opc[i].filhos != null)
	  build_subh(opc[i].filhos,td_f[i]);
  }
  dv_f.appendChild(tb_f);
  bm_f.appendChild(dv_f);
//  alert(bm_f.innerHTML);
}

function build_subh(sopc,obj)
{
  var sfg_f = new Image;
  sfg_f.src = figuras[0];

  var sdv_f = document.createElement('div');
  sdv_f.style.position = 'absolute';
//  sdv_f.style.visibility = "hidden";
  sdv_f.style.display = "none";
  sdv_f.style.top = sdv_f.style.top + sfg_f.height;
//  sdv_f.style.left = 

  var stb_f = document.createElement('table');
//  stb_f.setAttribute('id','tb_princ');
//  stb_f.width = "100%";
//  stb_f.height = sfg_f.height;
  stb_f.border = "0";
  stb_f.cellSpacing = "0";
  stb_f.cellPadding = "0";

  var str_f = new Array(sopc.length);
  var std_f = new Array(sopc.length);
  for(p = 0; p < sopc.length; p++)
  {
    str_f[p] = stb_f.insertRow(p);
	str_f[p].style.height = sfg_f.height;
	str_f[p].align = "right";
//	str_f[p].width = "100%";

	std_f[p] = str_f[p].insertCell(0);
	std_f[p].style.background = 'url('+figuras[0]+')';

//	std_f[p].style.align = "left";

	std_f[p].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	std_f[p].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (sopc[p].href != null)
	  std_f[p].innerHTML = '<a href="'+sopc[p].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div></a>';
	else
	  std_f[p].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div>';
	  
	if (sopc[p].filhos != null)
	  build_subh(sopc[p].filhos,std_f[p]);
  
	obj.onmouseover = function()
	{
	  sdv_f.style.display = "";
//	  sdv_f.style.left = event.x-event.y;
 	  obj.style.background = 'url('+figuras[1]+')';
	}
	
	obj.onmouseout = function()
	{
	  sdv_f.style.display = "none";
	  obj.style.background = 'url('+figuras[0]+')';
	}
  }
  sdv_f.appendChild(stb_f);
  obj.appendChild(sdv_f);
}
function CriaMenu(descricao,filhos,href) 
{ 
  this.descricao=descricao; 
  this.filhos=filhos; 
  this.href=href;
} 

var figuras = ['sub-button-tile.gif','sub-buttonOver-tile.gif','sub-button-left.gif','sub-buttonOver-left.gif','sub-button-right.gif','sub-buttonOver-right.gif'];

var op4 = new Array(10); // consultar
op4[0] = new CriaMenu("Compras",null,"consultar_compras_frontend.php");
op4[1] = new CriaMenu("Conta a Pagar",null,"consultar_contapagar_frontend.php");
op4[2] = new CriaMenu("Conta a Receber",null,"consultar_contareceber_frontend.php");
op4[3] = new CriaMenu("Fornecedor",null,"consultar_fornecedor_frontend.php");
op4[4] = new CriaMenu("Funcionario",null,"consultar_funcionario_frontend.php");
op4[5] = new CriaMenu("Itens Compra",null,"consultar_itenscompra_frontend.php");
op4[6] = new CriaMenu("Itens Venda",null,"consultar_itensvenda_frontend.php");
op4[7] = new CriaMenu("Nota Fiscal",null,"consultar_notafiscal_frontend.php");
op4[8] = new CriaMenu("Produtos",null,"consultar_produtos_frontend.php");
op4[9] = new CriaMenu("Tipo de Pagamento",null,"consultar_tipopagto_frontend.php");
op4[10] = new CriaMenu("Tipo de Produto",null,"consultar_tipoproduto_frontend.php");
op4[11] = new CriaMenu("Vendas",null,"consultar_vendas_frontend.php");


var op3 = new Array(10); // excluir
op3[0] = new CriaMenu("Compras",null,"excluir_compras_frontend.php");
op3[1] = new CriaMenu("Conta a Pagar",null,"excluir_contapagar_frontend.php");
op3[2] = new CriaMenu("Conta a Receber",null,"excluir_contareceber_frontend.php");
op3[3] = new CriaMenu("Fornecedor",null,"excluir_fornecedor_frontend.php");
op3[4] = new CriaMenu("Funcionario",null,"excluir_funcionario_frontend.php");
op3[5] = new CriaMenu("Itens Compra",null,"excluir_itenscompra_frontend.php");
op3[6] = new CriaMenu("Itens Venda",null,"excluir_itensvenda_frontend.php");
op3[7] = new CriaMenu("Nota Fiscal",null,"excluir_notafiscal_frontend.php");
op3[8] = new CriaMenu("Produtos",null,"excluir_produtos_frontend.php");
op3[9] = new CriaMenu("Tipo de Pagamento",null,"excluir_tipopagto_frontend.php");
op3[10] = new CriaMenu("Tipo de Produto",null,"excluir_tipoproduto_frontend.php");
op3[11] = new CriaMenu("Vendas",null,"excluir_vendas_frontend.php");

var op2 = new Array(10); // alterar
op2[0] = new CriaMenu("Compras",null,"alterar_compras_frontend.php");
op2[1] = new CriaMenu("Conta a Pagar",null,"alterar_contapagar_frontend.php");
op2[2] = new CriaMenu("Conta a Receber",null,"alterar_contareceber_frontend.php");
op2[3] = new CriaMenu("Fornecedor",null,"alterar_fornecedor_frontend.php");
op2[4] = new CriaMenu("Funcionario",null,"alterar_funcionario_frontend.php");
op2[5] = new CriaMenu("Itens Compra",null,"alterar_itenscompra_frontend.php");
op2[6] = new CriaMenu("Itens Venda",null,"alterar_itensvenda_frontend.php");
op2[7] = new CriaMenu("Nota Fiscal",null,"alterar_notafiscal_frontend.php");
op2[8] = new CriaMenu("Produtos",null,"alterar_produtos_frontend.php");
op2[9] = new CriaMenu("Tipo de Pagamento",null,"alterar_tipopagto_frontend.php");
op2[10] = new CriaMenu("Tipo de Produto",null,"alterar_tipoproduto_frontend.php");
op2[11] = new CriaMenu("Vendas",null,"alterar_vendas_frontend.php");

var op1 = new Array(10); // incluir
op1[0] = new CriaMenu("Compras",null,"incluir_compras_frontend.php");
op1[1] = new CriaMenu("Conta a Pagar",null,"incluir_contapagar_frontend.php");
op1[2] = new CriaMenu("Conta a Receber",null,"incluir_contareceber_frontend.php");
op1[3] = new CriaMenu("Fornecedor",null,"incluir_fornecedor_frontend.php");
op1[4] = new CriaMenu("Funcionario",null,"incluir_funcionario_frontend.php");
op1[5] = new CriaMenu("Itens Compra",null,"incluir_itenscompra_frontend.php");
op1[6] = new CriaMenu("Itens Venda",null,"incluir_itensvenda_frontend.php");
op1[7] = new CriaMenu("Nota Fiscal",null,"incluir_notafiscal_frontend.php");
op1[8] = new CriaMenu("Produtos",null,"incluir_produtos_frontend.php");
op1[9] = new CriaMenu("Tipo de Pagamento",null,"incluir_tipopagto_frontend.php");
op1[10] = new CriaMenu("Tipo de Produto",null,"incluir_tipoproduto_frontend.php");
op1[11] = new CriaMenu("Vendas",null,"incluir_vendas_frontend.php");

var op = new Array(4);
op[0] = new CriaMenu("Cadastrar",op1,null);
op[1] = new CriaMenu("Alterar",op2,null);
op[2] = new CriaMenu("Excluir",op3,null);
op[3] = new CriaMenu("Consultar",op4,null);

build_menu(1,op)