var refreshId;
function myfunc(){
  refreshId = setInterval(function()
        {
				
				var speed;
				speed.load('rpm/rpm.php');

				RPM.value= speed;
				RPM.update({valueText :speed});
        }
		,1000);

}


myfunc();
