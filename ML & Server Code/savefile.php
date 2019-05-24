<?php
$file_path="";
$file_path=$file_path.basename($_FILES['uploaded_file']['name']);
if(move_uploaded_file(&_FILES['uploaded_file']['tmp_name'],$file_path)){
	echo "success";
}else{
	echo "error";
}

exec('python3 pytest.py');
#pytest.py is the same file as SVM1.ipynb with py extension.
?>	