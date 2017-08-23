var in_proc=false;var start=0;
function fresh(){
	var dd=document.getElementById("telo");
	var text_mess1=document.getElementById("text_mess");
	text_mess=text_mess1.value.replace(/\n/gim, '<br/>');
	if(dd.innerHTML!==''){var last_item=dd.children[dd.children.length-2].id;}
	if(!last_item){last_item='0';}
		$.ajax({
			type:"POST",
			url:"back.php",
			data:{
				last_item:last_item,
				operation:1
			},
			success:function(msg){
				if(msg!=='0'){
if(msg===""){start=0;}
msg=msg.replace(/(([\w\d.]+)([@]){1}([\w\d.]+))|(http:\/\/|https:\/\/)?[\w\d]+[\.]{1}[\w\d]+[\/\w\d]*(\.php)?(\.html)?/gim,function($1,$2,$3,$4,$5,$6){var str='';if($4!=="@"){var htp=$6;if(htp===undefined){htp="http://";}else{htp="";} str='<a href=\"'+htp+""+$1+'\" target="_blank">'+$1+'</a>';}else{str='<a href=\"mailto:'+$1+'\" target="_blank">'+$1+'</a>';}return str;});
					$("#telo").html(msg);$("#telo").scrollTop(9999999);
							start+=1;
						if(start>1){
							var audio=document.getElementById('audio');
							audio.play();
						}
					}
			},
			error:function(msg){}
			});
}
function refresh(){
	setInterval(function(){fresh();},2000);
}
function sendy(){
	start=1;
	var names=document.getElementById("names").value;
	if(names===''){names='incognito';}
	var text_mess1=document.getElementById("text_mess");
	var telo=document.getElementById("telo");
	var tt=text_mess1.value.replace(/[\n]{2,}/gm,function($1){return '\n';})
	text_mess=tt.replace(/\n/gim, '<br/>');
	if(text_mess!=='' && in_proc!==true){
		in_proc=true;
		text_mess1.disabled=true;
		telo.innerHTML+='<div class="strochka_n" id="n">'+text_mess+'</div><f/>';
		document.getElementById("sub").disabled=true;
		document.getElementsByClassName("s1")[0].style.display='none';
		$.ajax({
			type:"POST",
			url:"back.php",
			data:{
				text_mess1:text_mess,
				operation:2,
				names:names
			},
			success:function(msg){
msg=msg.replace(/(([\w\d.]+)([@]){1}([\w\d.]+))|(http:\/\/|https:\/\/)?[\w\d]+[\.]{1}[\w\d]+[\/\w\d]*(\.php)?(\.html)?/gim,function($1,$2,$3,$4,$5,$6){var str='';if($4!=="@"){var htp=$6;if(htp===undefined){htp="http://";}else{htp="";} str='<a href=\"'+htp+""+$1+'\" target="_blank">'+$1+'</a>';}else{str='<a href=\"mailto:'+$1+'\" target="_blank">'+$1+'</a>';}return str;});
				text_mess1.value='';
				$("#telo").html(msg);
				text_mess1.disabled=false;
				telo.disabled=false;
				in_proc=false;
				document.getElementById("sub").disabled=false;
				document.getElementsByClassName("s1")[0].style.display='';
				$("#text_mess").focus();
				$("#telo").scrollTop(9999999);
			},
			error:function(msg){
				
				}
			});
	}
}