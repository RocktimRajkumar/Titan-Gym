var count=0;

var elementMember;
var elementplan;

function collapseSidebar() {
	
	if(count==0){
		var element=document.getElementById("navbarcollapse");
		 element.className = element.className.replace("page-container sidebar-collapsed", "page-container");
		  if(memcount==0)
		  	elementMember.className=elementMember.className.replace("","has-sub");
		  else if(memcount==1){
		  	elementMember.className=elementMember.className.replace("","has-sub opened");
		  }

		  if(plancount==0)
		  	elementplan.className=elementplan.className.replace("","has-sub");
		  else if(plancount==1)
		  	elementplan.className=elementplan.className.replace("","has-sub opened");

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

		  if(plancount==0)
		  	elementplan.className=elementplan.className.replace("has-sub","");
		  else
		  	elementplan.className=elementplan.className.replace("has-sub opened","");

		 count=0;
	}
 
}

function initializeMember(){
	elementMember=document.getElementById("hassubopen");
	elementplan=document.getElementById("planhassubopen");
}

var memcount=0;
var plancount=0;

function memberExpand(passvalue){

	if(passvalue==1){
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
	else if(passvalue==2){
		if(plancount==0){
		
			elementplan.className=elementplan.className.replace("has-sub","has-sub opened");

			var element2=document.getElementById("planExpand");
			 element2.className = element2.className.replace("", "visible");
			 plancount=1;
		}
		else if(plancount==1){
			elementplan.className=elementplan.className.replace("has-sub opened","has-sub");

			var element2=document.getElementById("planExpand");
			 element2.className = element2.className.replace("visible", "");
			 plancount=0;
		}
	}
}
