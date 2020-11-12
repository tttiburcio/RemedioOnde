/*
 * Bibliotheca Ajax 1.5 
 *
 * Copyright (c) 2008 Mateus Freira dos Santos  * Data: 27/11/2008 08:20
 * Favor utilizar com os devidos créditos.....
 * Sobre: [Aluno PUC Betim Sistemas de Informação e Desenvolvedor WEB]
 * E-mail: mateus.freira@gmail.com
 * em caso de duvida favor me encaminha um e-mail terei um enorme prazer em responder   
 */

//-----------------------------------class ajax--------------------------------------------------------------
function class_ajax()
{
  this.usando=false;
  this.fila=new Array();//fila de requisicoes
  this.susseso=function (){};
  this.erro=null;
  this.ajax=null;
  this.rechama=false;
  this.url="";
  this.dados=null;
  this.metodo="POST";
  this.camafilad=function(rechama)
	   {
	   if(rechama==true)
		   {
			 //Ajax.rechama=false;
			 Ajax.camafilad();
  	       }
		   else
		   {

			if(this.ajax==null)
			   this.cria();
			  if(this.usando==false)
			  {
			    if(this.fila.length > 0){
				var current = this.fila.shift();
			    this.envia_ajax(current[0],current[1],current[2]);
			    }
			  }
			  else if(this.fila.length > 0)
			  {
				 this.rechama=true;
				 setTimeout("Ajax.camafilad(true)",100);
				 
			  }
		}//	   if(Ajax.rechama==true)			
	   }
  this.inpetora=function (dad,url,susseso)
		{
		  this.fila.push([dad,url,susseso]);
		  	  if(this.fila.length > 0)
		  	     this.camafilad();
	  }  
  this.getresposta=function (tipo){
    if(tipo=='xml')
     return this.ajax.responseXML;
    else
     return  this.ajax.responseText;
  };
  this.gera_dados=function(objform)
             {
               var parametros= new Array();
                for(var i=0;i<objform.elements.length;i++)
                    {
	  				if(objform.elements[i].type=="select-multiple")
					{
                    	  opcoes=objform.elements[i].options;
			       for (var j = 0; j< opcoes.length; j++) {
						if (opcoes[j].selected == true) {
											  parametro=encodeURIComponent(objform.elements[i].name);
											  parametro+="=";
											  parametro+=encodeURIComponent(opcoes[j].value);
											  parametros.push(parametro) 
						  }
						  
					}					  
					}else if((objform.elements[i].type!='radio' && objform.elements[i].type!='checkbox') ||  objform.elements[i].checked==true)
                     	{
                    	  parametro=encodeURIComponent(objform.elements[i].name);
                          parametro+="=";
                          parametro+=encodeURIComponent(objform.elements[i].value);
                          parametros.push(parametro)
                	    }
                    }
                     this.dados=parametros.join("&");
                 return  this.dados;
             }
  this.cria=function()
    {
		 try {
	   			this.ajax = new ActiveXObject("Microsoft.XMLHTTP");
	      	}
    	catch(e) {
    	try {
    			this.ajax = new ActiveXObject("Msxml2.XMLHTTP");
    	}
    	catch(ex) {
    	try {
    			this.ajax = new XMLHttpRequest();
    	}
    	catch(exc) {
    			alert("Esse browser não tem recursos para uso do Ajax");
    	this.ajax = null;
	            }
	         }
	}
	 this.usando=false;
    //this.ajax.susseso=this.susseso;
	 return this.ajax;//se tiver suporte ajax

    }

this.envia=function()
  {
    
	this.inpetora(this.dados,this.url,this.susseso)
  }
this.envia_ajax=function (dados,urls,susseso_ajax)
     {
	     if(this.ajax==null)
		   	this.cria();
		 if(this.usando==false)
           {
			  this.usando=true;
    	        if(this.ajax) {
                               this.ajax.open(this.metodo,urls, true);
                               this.ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
                               this.ajax.onreadystatechange = function() {
            			            if(Ajax.ajax.readyState == 4 ) {
		
                                        if(Ajax.ajax.status==200)
                                            {
											 if(susseso_ajax())
                                                 {
                                                    susseso_ajax();
                                                    
                                                 }
												Ajax.usando=false;//ajax.usando
                                                return true;
                                            }
                                            else
                                            {
                                              Ajax.usando=false; //ajax.usando                                    
											  return false;
                                            }
							              }
            					   }
			                 }
			       this.ajax.send(dados);
            }
            else
            {
               this.inpetora(dados,urls);//fila.push([dad,div,url]); 
            }
     }
 
}
Ajax=new class_ajax();//istacia a classe ajax na memoria
//-----------------------------------------------------fim class---------------------------------------------------
function $_(id)
    {
       return document.getElementById(id);
    }