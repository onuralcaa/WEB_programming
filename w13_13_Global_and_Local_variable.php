<script>

	test()
	
	if (typeof a != 'undefined') document.write('a = "' + a + '"<br />')  //a = "123"
	if (typeof b != 'undefined') document.write('b = "' + b + '"<br />')
	if (typeof c != 'undefined') document.write('c = "' + c + '"<br />')
	
	function test()
	{
		a = 123  //global
		var b = 456 //local
		if (a == 123) var c = 789 //koşullu local
	}

</script>