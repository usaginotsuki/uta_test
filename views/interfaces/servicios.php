<html>

<head>
    <title> UTA </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.1/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.1/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.1/themes/color.css">

    <script type="text/javascript" src="jquery-easyui-1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.10.1/jquery.easyui.min.js"></script>
</head>

<body>
    <h2>UTA ESTUDIANTES</h2>
    <button id="btn_add" onclick="location.href = 'views/interfaces/report.php'">Reporte</button>
    <table id="dg" title="My Users" class="easyui-datagrid" style="width:700px;height:250px" url="models/cargar.php" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true" data-options="emptyMsg:'No se encontró nada'">
        <thead>
            <tr>
                <th field="est_cedula" width="30">CEDULA</th>
                <th field="est_nombre" width="30">NOMBRE</th>
                <th field="est_apellido" width="30">APELLIDO</th>
                <th field="est_direccion" width="30">DIRECCION</th>
                <th field="est_telefono" width="30">TELEFONO</th>

            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo Estudiantes</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Borrar Estudiante</a>
    </div>

    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3>Información del estudiante</h3>
            <div style="margin-bottom:10px">
                <input name="est_cedula" class="easyui-textbox" required="true" label="Cédula:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="est_nombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="est_apellido" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="est_direccion" class="easyui-textbox" required="true" label="Dirección:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="est_telefono" class="easyui-textbox" label="Teléfono:" style="width:100%">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>
    <script type="text/javascript">
        var url;

        function newUser() {
            $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'Nuevo Estudiante');
            $('#fm').form('clear');
            url = 'models/guardar.php';
        }

        function editUser() {
            var row = $('#dg').datagrid('getSelected');
            if (row) {
                $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'Editar Estudiante');
                $('#fm').form('load', row);
                url = 'models/editar.php';

            }
        }

        function saveUser() {
            $('#fm').form('submit', {
                url: url,
                iframe: false,
                onSubmit: function() {
                    return $(this).form('validate');
                },
                success: function(result) {
                    var result = eval('(' + result + ')');
                    if (result.errorMsg) {
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close'); // close the dialog
                        $('#dg').datagrid('reload'); // reload the user data
                    }
                }
            });
        }

        function destroyUser() {
            $('#fm').form('load', row);
            url = 'models/editar.php';
            var row = $('#dg').datagrid('getSelected');
            if (row) {
                $('#dg').datagrid('deleteRow', $('#dg').datagrid('getRowIndex', row));
                $.post('models/eliminar.php', {
                    est_cedula: row.est_cedula
                }, function(data) {
                    $('#dg').datagrid('reload');
                });
            }
        }
    </script>

</body>

</html>