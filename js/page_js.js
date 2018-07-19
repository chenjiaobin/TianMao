
//index首页
window.onload=function(){
    	var q=document.getElementsByClassName('nav_list'),
    	    w=q[0].getElementsByTagName('dl'),
    		e=document.getElementsByClassName('item_list');
    		for(var i=0;i<w.length;i++){
    		w[i].onmouseover=function(){
    			e[0].style.display='block';
    			e[0].onmouseover=function(){
    				e[0].style.display='block';
    				};
    			e[0].onmouseout=function(){
    				e[0].style.display='none';
    				};
    			};
    			w[i].onmouseout=function(){
    				e[0].style.display='none';
    				};
    	       }	
                // 加入收藏夹
        var top_l=document.getElementsByClassName("top_l"),
            top_a=top_l[0].getElementsByTagName("a");
            top_a[0].onclick=function(){
                AddFavorite(window.location,document.title);
            };	   
    	};
        function search(){
            if(document.form1.txt.value ===""){
                document.form1.txt.value.clear;
            }else {
                window.open(document.form1.txt.value, '_self',' toolbar=no,menubar=no,resizable=no,location=no ,statusbar=yes');
                document.form1.txt.value.clear;
            }
}

