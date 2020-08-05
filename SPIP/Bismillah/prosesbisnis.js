$('p input[type="button"]').click(function () {
    $('#table2').append('<tr>
								<td>
									<input type = "number" ID = "no" placeholder = "1"/>
								</td>
								<td>
									<input type = "text" ID = "tahapan" placeholder = "Tahapan 1"/>
								</td>
								<td>
									<input type = "text" ID = "suboutput" placeholder = "Sub-Output 1"/>
								</td>
							</tr>')
});