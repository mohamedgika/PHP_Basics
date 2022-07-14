<?php
// if($_POST['Operations']=='+'){                   //This By Using If Condition
//     echo $_POST['Number1']+$_POST['Number2'];
// }

// else if($_POST['Operations']=='-'){
//     echo $_POST['Number1']-$_POST['Number2'];
// }

// else if($_POST['Operations']=='*'){
//     echo $_POST['Number1']*$_POST['Number2'];
// }

// else if($_POST['Operations']=='/'){
//     echo $_POST['Number1']/$_POST['Number2'];
// }

// else{
//     echo 'This Operation Not Found'; 
// }

switch($_POST['Operations']){    //This By Using Switch Condition
    case '+':
        echo $_POST['Number1']+$_POST['Number2'];
        break;
    case '-':
        echo $_POST['Number1']-$_POST['Number2'];
        break;
    case '*':
        echo $_POST['Number1']*$_POST['Number2'];
        break;
    case '/':
        echo $_POST['Number1']/$_POST['Number2'];
        break;
    default:
        echo"This Operate Not Found";
}
