var count=0;

function collapseSidebar() {
	if(count==0){
		var element=document.getElementById("navbarcollapse");
		 element.className = element.className.replace("page-container sidebar-collapsed", "page-container");
		 count=1;
	}
	else if(count==1){
		var element=document.getElementById("navbarcollapse");
		 element.className = element.className.replace("page-container", "page-container sidebar-collapsed");
		 count=0;
	}
 
}

var memcount=0;

function memberExpand(){
	if(memcount==0){
		var elementOpen=document.getElementById("hassubopen");
		elementOpen.className=elementOpen.className.replace("has-sub","has-sub opened");

		var element=document.getElementById("memExpand");
		 element.className = element.className.replace("", "visible");
		 memcount=1;
	}
	else if(memcount==1){
		var elementClose=document.getElementById("hassubopen");
		elementClose.className=elementClose.className.replace("has-sub opened","has-sub");

		var element=document.getElementById("memExpand");
		 element.className = element.className.replace("visible", "");
		 memcount=0;
	}
}