var count=0;

var elementMember;

function collapseSidebar() {
	
	if(count==0){
		var element=document.getElementById("navbarcollapse");
		 element.className = element.className.replace("page-container sidebar-collapsed", "page-container");
		  if(memcount==0)
		  	elementMember.className=elementMember.className.replace("","has-sub");
		  else{
		  	elementMember.className=elementMember.className.replace("","has-sub opened");
		  }

		 count=1;
	}
	else if(count==1){
		var element=document.getElementById("navbarcollapse");
		 element.className = element.className.replace("page-container", "page-container sidebar-collapsed");
		  
		 
		 if(memcount==0){
		  	elementMember.className=elementMember.className.replace("has-sub","");
		  }else if(memcount==1){
		  	elementMember.className=elementMember.className.replace("has-sub opened","");
		  } 	
		 count=0;
	}
 
}

function initializeMember(){
	elementMember=document.getElementById("hassubopen");
}

var memcount=0;

function memberExpand(){
	if(memcount==0){
		
		elementMember.className=elementMember.className.replace("has-sub","has-sub opened");

		var element=document.getElementById("memExpand");
		 element.className = element.className.replace("", "visible");
		 memcount=1;
	}
	else if(memcount==1){
		elementMember.className=elementMember.className.replace("has-sub opened","has-sub");

		var element=document.getElementById("memExpand");
		 element.className = element.className.replace("visible", "");
		 memcount=0;
	}
}