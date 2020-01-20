// ----------------------------------------------------- 
// Assignment 2 
// Written by: Minh Bui-40073498 
// For SOEN 287 Section CC- Summer 2019 
// ----------------------------------------------------- 
function run()
{
	var input = prompt("Input the two pairs String: ");
	var checkInput=0;
	document.getElementById("output").innerHTML+="you have entered below mentioned string pairs. <br>";

	while(input!=-1 && checkInput!=5)
	{
		if(input.length==0|| !isNaN(input))
		{
			checkInput++;
			if(checkInput==5)
			{
				document.getElementById("output").innerHTML+="You have exceeded invalid entry limit <br>";
			}
		}
		else{
		checkInput=0;
		var strL = input.length;
		var divStringPos;
		for(var i=0; i<strL;i++)
		{
			if(input.charAt(i)==" ")
			{
				divStringPos=i;
			}
		}
		var str1 = input.slice(0,divStringPos);
		var str2 = input.slice(divStringPos+1,strL);
		str1=str1.toLowerCase();
		str2=str2.toLowerCase();
		if(isAnagram(str1,str2))
		{
			document.getElementById("output").innerHTML+="Pairs "+str1+" and "+str2+" are anagrams. <br>";
		}
		else
		{
			document.getElementById("output").innerHTML+="Pairs "+str1+" and "+str2+" are not anagrams. <br>";
		}
	}
		input = prompt("Input the two pairs String: ");
	}
}
function isAnagram(str1, str2)
{
	if(str1.length !== str2.length)
	{
		return false;
	}
	var sortStr1 = str1.split('').sort().join('');
	var sortStr2 = str2.split('').sort().join('');
	return(sortStr1===sortStr2);
}