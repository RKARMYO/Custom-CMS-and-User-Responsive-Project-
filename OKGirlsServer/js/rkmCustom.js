$(document).ready(function(){
			//$("#loading").show();
			// if(!navigator.onLine)
			// {
			// 	$("#loading").hide();
			// }
	//$("#newsTable").DataTable();
	//$("#newsTitle").val("");$("#newsParagraph").val("");$("#newsPhotos").val("");
	$(document).on("submit","#newsInsertForm,#newsUpdateForm",function(e){ console.log("insertBtn ok");
		$("#loading").show();
		e.preventDefault();
		$.ajax({
			url:"index.php",
			type:"post",
			data:new FormData(this),
			cache:false,// no cache
			processData:false,
			contentType:false,
			success:function(res)
			{
				console.log("response :"+res);
				if(res==101)
				{
					$("#loading").hide();
					alert("အောင်မြင်ပါသည်!");
					$("#newsTitle").val("");$("#newsParagraph").val("");$("#newsPhotos").val("");
					window.location.assign("index.php?operation=newsEdit");
				}
				else
				{
					$("#loading").hide();
					alert("မအောင်မြင်ပါ!");
				}
			}
		});
	});

	$(document).on("click",".newsDelete",function(){
		var delId=$(this).next().val();console.log("delete id:"+delId);
		$.post("index.php",{operation:"newsdelete",dbId:delId},function(res){ console.log(res);
			if(res==101)
			{
				alert("အောင်မြင်ပါသည်!");
				$("."+delId).hide();
			}
			else
			{
				alert("မအောင်မြင်ပါ!");
			}
		});
	});

	// $(document).on("click",".newsEdita",function(){
	// 	var editId=$(this).next().next().val();console.log("editId :"+editId);
	// 	$.post("index.php",{operation:"toupdate",dbId:editId},function(res){ //alert(res);

	// 	});
	// });
});