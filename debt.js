var i=0;
document.querySelector("#add"+i++).addEventListener("click",function(){
    var temp=`<tr>
    <td>
    <select required>
        <option disabled selected hidden>Payer</option>

    </select>
    </td>
    <td>
    <select required>
        <option disbaled selected hidden>Payee</option>

    </select>
    </td>
    <td>
        <input type="text" name="amount" placeholder="Enter Amount">
    </td>
    <td>
    <button class="btn btn-primary" id="add0" style="
padding-top: 1px;
padding-bottom: 1px;
padding-right: 4px;
padding-left: 4px;
">  + ADD</button>
    </td>
</tr>`;
    document.querySelector(".tb").innerHTML+=temp;
    document.querySelector("#add"+(i-1)).setAttribute('id','add'+i);
})
/*function addRows(){ 
	var table = document.getElementById('tb');
	var rowCount = table.rows.length;
	var cellCount = table.rows[0].cells.length; 
	var row = table.insertRow(rowCount);
	for(var i =0; i <= cellCount; i++){
		var cell = 'cell'+i;
		cell = row.insertCell(i);
		var copycel = document.getElementById('col'+i).innerHTML;
		cell.innerHTML=copycel;
		if(i == 3){ 
			var radioinput = document.getElementById('col3').getElementsByTagName('input'); 
			for(var j = 0; j <= radioinput.length; j++) { 
				if(radioinput[j].type == 'radio') { 
					var rownum = rowCount;
					radioinput[j].name = 'gender['+rownum+']';
				}
			}
		}
	}
}*/