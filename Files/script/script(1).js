function myFunction() {
    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var durationf=document.getElementById("durationfrom");
    var durationt=document.getElementById("durationto");
    var venue=document.getElementById("venue");
    var conduct_by=document.getElementById("conduct_by");
    var issue_by=document.getElementById("issue_by");
    switch(x.options[i].value){
        
        case "1":
        case "2":durationf.style.display="table-row";
                durationt.style.display="table-row";
                venue.style.display="table-row";
                conduct_by.style.display="none";
                issue_by.style.display="none";
            break;
            
        case "3":
                durationf.style.display="none";
                durationt.style.display="none";
                venue.style.display="none";
                conduct_by.style.display="table-row";
                issue_by.style.display="table-row";
            break;
        
        case "4":durationf.style.display="table-row";
                durationt.style.display="table-row";
                venue.style.display="none";
                conduct_by.style.display="none";
                issue_by.style.display="none";
            break;
    }
}

function myProgram(){
    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var oncampus=document.getElementById("oncampus");
    var offcampus=document.getElementById("offcampus");
    var research=document.getElementById("research");
    var pgdaem=document.getElementById("pgdaem");
    var durationf1=document.getElementById("durationfrom1");
    var durationt1=document.getElementById("durationto1");
    var venue1=document.getElementById("venue1");
     var durationf2=document.getElementById("durationfrom2");
    var durationt2=document.getElementById("durationto2");
    var venue2=document.getElementById("venue2");
    var durationf3=document.getElementById("durationfrom3");
    var durationt3=document.getElementById("durationto3");
    
    var conduct_by=document.getElementById("conduct_by");
    var issue_by=document.getElementById("issue_by");
    
    switch(x.options[i].value){
        
        case "1":oncampus.style.display="table-row";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="none";
                durationf1.style.display="table-row";
                durationt1.style.display="table-row";
                venue1.style.display="table-row";
                durationf2.style.display="none";
                durationt2.style.display="none";
                venue2.style.display="none";
                durationf3.style.display="none";
                durationt3.style.display="none";
                conduct_by.style.display="none";
                issue_by.style.display="none";
            break;
        case "2":oncampus.style.display="none";
                 offcampus.style.display="table-row";
                 research.style.display="none";
                 pgdaem.style.display="none";
                durationf1.style.display="none";
                durationt1.style.display="none";
                venue1.style.display="none";
                durationf2.style.display="table-row";
                durationt2.style.display="table-row";
                venue2.style.display="table-row";
                durationf3.style.display="none";
                durationt3.style.display="none";
                conduct_by.style.display="none";
                issue_by.style.display="none";
            break;
            
        case "3":
                oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="table-row";
                 pgdaem.style.display="none";
                durationf1.style.display="none";
                durationt1.style.display="none";
                venue1.style.display="none";
                durationf2.style.display="none";
                durationt2.style.display="none";
                venue2.style.display="none";
                durationf3.style.display="none";
                durationt3.style.display="none";
                conduct_by.style.display="table-row";
                issue_by.style.display="table-row";
            break;
        
        case "4":oncampus.style.display="none";
                 offcampus.style.display="none";
                 research.style.display="none";
                 pgdaem.style.display="table-row";
                durationf1.style.display="none";
                durationt1.style.display="none";
                venue1.style.display="none";
                durationf2.style.display="none";
                durationt2.style.display="none";
                venue2.style.display="none";
                durationf3.style.display="table-row";
                durationt3.style.display="table-row";
                conduct_by.style.display="none";
                issue_by.style.display="none";
            break;
    }
}