<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        font-family: "Poppins", sans-serif;
        overflow: hidden;
    }

    .table{
        width: 100%;
    }

    .table_header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 20px;
        background: rgb(240, 240, 240);
    }

    .table_header p{
        color:#000;
    }

    button{
        outline: none;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        padding: 10px;
        color: #ffff;
    }

    td button:nth-child(1){
        background-color: #0298cf;
    }

    td button:nth-child(2){
        background-color: red;
    }

    .add_new{
        padding: 10px 30px;
        color: #ffff;
        background: #0298cf;
        border-radius: 6px;
        cursor: pointer;
    }

    input{
        padding: 10px 20px;
        margin: 0 10px;
        outline: none;
        border: 1px solid #0298cf;
        color:  #0298cf;
        border-radius: 6px;
    }

    

    /* table section */
    .table_section{
        height: 500px;
        overflow: auto;
    }

    table{
        width: 100%;
        table-layout: fixed;
        min-width: 900px;
        border-collapse: collapse;
    }

    thead th{
        position: sticky;
        top: 0;
        background-color: #f6f9fc;
        color: #8493a5;
        font-size: 15px;
    }

    th, td{
        border-bottom: 1px solid #dddddd;
        padding: 10px 20px;
        word-break: break-all;
        text-align: center;
    }

    .pagination{
        display: flex;
        justify-content: flex-end;
        width: 100%;
        padding: 10px 20px;
        /* background: #8493a5; */
    }

    .pagination div{
        padding: 15px;
        border: 2px solid #d5d0d0;
        height: 50px;
        width: 50px;
        border-radius: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #0298cf;
        color:#ffff;
        box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.75); 
        margin: 0 5px;
        cursor: pointer;


    }
    tr:hover td{
        color: #0298cf;
        cursor: pointer;
        background-color: #f6f9fc;
    }

    ::placeholder{
        color: #0298cf;
    }

    ::-webkit-scrollbar{
        height: 5px;
        width: 5px;
    }

    ::-webkit-scrollbar-track{
        box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    }

    ::-webkit-scrollbar-thumb{
        box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    }
</style>
</head>
<body>
    <div class="table">
        <div class="table_header">
            <p>Marks Details</p>
            <div>
                <input type="text" placeholder="search">
                <button class="add_new">Add</button>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Marks Id</th>
                        <th>Marks</th>
                        <th>Comment</th>
                        <th>Grade</th>
                        <th>Course code</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                   
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        
                    </td>
                    
                </tr>


                    
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <div><i class="fa-solid fa-angles-left"></i></div>
            <div><i class="fa-solid fa-angle-left"></i></div>
            <div>1</div>
            <div>2</div>
            <div><i class="fa-solid fa-angles-right"></i></div>
            <div><i class="fa-solid fa-angle-right"></i></div>
        </div>
        
    </div>
</body>
</html>