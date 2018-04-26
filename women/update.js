window.onload = initAll;

function initAll(){
	getAllElements();

	setAllActions();
}

var unm_sp,unm_txt,unm_edit,unm_save,unm_cancel;
function getAllElements(){
	//User Name /////////////////////////////
	unm_sp = document.getElementById('unm_sp');
	unm_txt = document.getElementById('unm_txt');
	unm_edit = document.getElementById('unm_edit');
	unm_save = document.getElementById('unm_save');
	unm_cancel = document.getElementById('unm_cancel');

	}

function setAllActions(){
	//User Name /////////////////////////////
	unm_edit.onclick = startEditUnm;
	unm_save.onclick = saveUnm;
	unm_cancel.onclick = cancelEditUnm;

	}



function cancelEditUnm(){
	unm_sp.className = 'show';
	//unm_txt.value = unm_sp.innerHTML;
	unm_txt.className = 'hide';
	
	unm_edit.className = 'show';
	unm_save.className = 'hide';
	unm_cancel.className = 'hide';
}
	
var uRq;
function saveUnm(){

	if(unm_sp.innerHTML!=unm_txt.value){
		
		uRq = new XMLHttpRequest();
		
		
		uRq.open("GET","newPage.php?unm="+unm_txt.value,true);
		
		
		uRq.onreadystatechange = showUnmChange;
		uRq.send(null);	
	}else{
		alert("No Changes made");
	}
    
}

function showUnmChange(){
	if(uRq.readyState==4&&uRq.status==200){
		var val = uRq.responseText;

		if(val=='yes'){
			
			unm_sp.innerHTML = unm_txt.value;
			unm_sp.className = 'show';		
			unm_txt.className = 'hide';

			unm_edit.className = 'show';
			unm_save.className = 'hide';
			unm_cancel.className = 'hide';
		}
	}
}

function startEditUnm(){
	unm_sp.className = 'hide';
	unm_txt.value = unm_sp.innerHTML;
	unm_txt.className = 'show';
	
	unm_edit.className = 'hide';
	unm_save.className = 'show';
	unm_cancel.className = 'show';
}

	