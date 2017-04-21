// JavaScript Document

	   function userLogin(){

			jQuery.post(baseUrl()+"/ajaxhandler/ajaxhandler.php", {
                ajax_action: 'user_login',
				email:$("#email").val(),
				password:$("#password").val(),
				},
            function (data) {
			   if(data!=''){

			     if(data == 1){
					 redirect('/addCustomers.php');
					 return true;

				  }else{
					alert('Invalid login credentials.');
					 return false;
				  }
				}
				else {
			   return false;
			 }
			});
		}

		// redirect

		function redirect(param){
		   var param;
		   if(param !=''){
			  window.location=baseUrl()+param;
			  return true;
		   }


		}

		//baseUrl sunmint.com/smapp
		function baseUrl(){
		  var base_url = $(".admin_url").val();
		  return base_url;

		}


		function submitForms(){

				jQuery.post(baseUrl()+"/ajaxhandler/ajaxhandler.php", {
						ajax_action: 'new_customer',
						cust_name : (document.getElementById("cust_fn").value + " " + document.getElementById("cust_ln").value),
						cust_email : document.getElementById("cust_email").value,
						cust_phone : document.getElementById("cust_phone").value,
						cust_address : document.getElementById("cust_street").value,
						cust_city : document.getElementById("cust_city").value,
						cust_state : document.getElementById("cust_state").value,
						cust_zip : document.getElementById("cust_zip").value,
						cust_usg_annual : document.getElementById("cust_avg_annual").value,
						cust_cost_annual : document.getElementById("cur_annual_cost").value,
						cust_prov : document.getElementById("cust_prov").value,
					},
					function (data) {
						if(data != '' ){
							addCustSys(data);
						}
						else{
							$("#modal_message").text("Oops, something went wrong! Please try again or contact support.");
							$("#modal_nav").attr("href","home.html");
							$("#confirm_modal").modal("toggle");
							return false;
						}
					}
				);
			}

		function addCustSys(custId) {
			jQuery.post(baseUrl()+"/ajaxhandler/ajaxhandler.php", {
						ajax_action: 'new_system',
						cust_id : custId,
						sys_size : document.getElementById("actSize").innerHTML,
						sys_prod : document.getElementById("estimated_annual_prod").innerHTML,
						sys_panels : document.getElementById("panCount").innerHTML,
						sys_panel_type : document.getElementById("PVMakeModel").innerHTML,
						sys_cost : document.getElementById("price").innerHTML,
						srec_month : document.getElementById("SRECmonthly").innerHTML,
						srec_annu : document.getElementById("SRECannual").innerHTML,
						srec_15year : document.getElementById("SREC15yr").innerHTML,
						fed_credit : document.getElementById("Federal_Tax_Credit").innerHTML,
						monthly_payment : document.getElementById("Total_Monthly_Payment").innerHTML,
					},
					function (data) {
						if(data != '' ){
							if (data == 1) {
								$("#modal_message").text("Congratulations, you are one step closer to Energy Freedom!");
								$("#modal_nav").attr("href","home.html");
								$("#confirm_modal").modal("toggle");
							}
						}
						else{
							$("#modal_message").text("Oops!");
							$("#modal_nav").attr("href","home.html");
							$("#confirm_modal").modal("toggle");
							return false;
						}
					}
			);
		}


	function generateInfo(){

		if  (document.getElementById("monthly").checked){
			jan =  document.getElementById("jan").value;
			feb =  document.getElementById("feb").value;
			mar =  document.getElementById("mar").value;
			apr =  document.getElementById("apr").value;
			may =  document.getElementById("may").value;
			jun =  document.getElementById("jun").value;
			jul =  document.getElementById("jul").value;
			aug =  document.getElementById("aug").value;
			sep =  document.getElementById("sep").value;
			oct =  document.getElementById("oct").value;
			nov =  document.getElementById("nov").value;
			dec =  document.getElementById("dec").value;

			dailyAvgTot =  (Number(jan) + Number(feb) + Number(mar) + Number(apr) +
							 Number(may) + Number(jun) + Number(jul) + Number(aug) +
							 Number(sep) + Number(oct) + Number(nov) + Number(dec))/12;
			dailyAvgTot = dailyAvgTot.toFixed(2);

			annUsage = dailyAvgTot * 365;
			annUsage = annUsage.toFixed(2);
			document.getElementById("cust_avg_annual").value = annUsage;
	}
	else {
		annUsage =  parseInt(document.getElementById("cust_avg_annual").value);
		annUsage = annUsage.toFixed(2);
		var monthlyAvg = (annUsage/12).toFixed(2);
	}

	utilRate = document.getElementById("cust_rate").value;
	//document.getElementById("totRate").innerHTML = monthlyAvg;
		//document.getElementById("annUse").innerHTML = annUsage;


		annCost = annUsage * utilRate;
		annCost = annCost.toFixed(2);
		//document.getElementById("annCost").innerHTML = annCost;
		document.getElementById("cur_annual_cost").innerHTML = annCost;

		document.getElementById("cur_annual_usg").innerHTML = annUsage;


		monCost = annCost / 12;
		monCost = monCost.toFixed(2);
		//document.getElementById("monCost").innerHTML = monCost;
		document.getElementById("cur_avgmonthly_cost").value = monCost;

		conversionRate = 1.2;
		sysSize = annUsage / conversionRate; //DC production
		sysSize = sysSize.toFixed(2);
		document.getElementById("sysSize").innerHTML = sysSize;

		panelSize = 300;
		panelCount = Math.ceil(sysSize / panelSize); //round this up
		document.getElementById("panCount").innerHTML = panelCount;

		actualSize = panelCount * panelSize; //round this up
		document.getElementById("actSize").innerHTML = actualSize;


			priceMultiplier = Math.round(actualSize / 1000);
			var price = priceMultiplier * 5000;
			price = price.toFixed(2);
			document.getElementById("price").innerHTML = price;

			//drop down to edit
			pvMakeModel = 'Silfab 300w';
			document.getElementById("PVMakeModel").innerHTML = pvMakeModel;

			inverter = 'Solar Edge';
			document.getElementById("Inverter").innerHTML = inverter;

			EngElec = 'Ryan Inc';
			//document.getElementById("LicEngElec").innerHTML = EngElec;

			document.getElementById("cur_annual_usg").innerHTML = annUsage;
			document.getElementById("cur_annual_cost").value = annCost;


			//For SREC Information
		    convRate = 1.2;
	        estAnnProd = actualSize * convRate;
	        document.getElementById("estimated_annual_prod").innerHTML = estAnnProd;

	        lowRate = 185;
	        numOfyears = 15;
	        SREC15yr = (estAnnProd / 1000) * lowRate * numOfyears;
			SREC15yr = SREC15yr.toFixed(2);
	        document.getElementById("SREC15yr").innerHTML = SREC15yr;

	        SRECannual = SREC15yr / 12; //this should be 15 not 12
			SRECannual = SRECannual.toFixed(2);
	        document.getElementById("SRECannual").innerHTML = SRECannual;

	        SRECmon = SRECannual / 15; //this should be 12 not 15
			SRECmon = SRECmon.toFixed(2);
	        document.getElementById("SRECmonthly").innerHTML = SRECmon;

					//For Fed Information
					var FedTaxCredRate = 0.3;
	   			var FederalTaxCred = price * FedTaxCredRate;
	      	document.getElementById("Federal_Tax_Credit").innerHTML = FederalTaxCred;

	        //For Financial Breakdown
	        var interestRate = 0.0599;
	        var interestYears = 15;

			var ratePeriod = interestRate / 12;

	        //var TotalPayments = (price * ratePeriod * Math.pow((1 + ratePeriod), interestYears*12)) / (Math.pow(1 + ratePeriod)-1);
	        var PoweredValue = Math.pow((1 + ratePeriod), interestYears * 12);
					PoweredValue = PoweredValue.toFixed(2);
	        var TopPiece = price * (ratePeriod * PoweredValue);
					TopPiece = TopPiece.toFixed(2);
	        var BottomPiece = PoweredValue - 1;
					BottomPiece = BottomPiece.toFixed(2);

	        var TotalPaymentMonthly = (TopPiece / BottomPiece) * 0.7225;
					TotalPaymentMonthly = TotalPaymentMonthly.toFixed(2);

        var TotalPaymentMonthlySREC = TotalPaymentMonthly - SRECmon;
				TotalPaymentMonthlySREC = TotalPaymentMonthlySREC.toFixed(2);

    		document.getElementById("Monthly_Payment_NoSREC").innerHTML = TotalPaymentMonthly;
        document.getElementById("Total_Monthly_Payment").innerHTML = TotalPaymentMonthlySREC;


//25 year no solar projection graph
		var annualCost = annCost;
		var today = new Date();
		var project_25 = [{period:today.getFullYear(),Cost:annualCost}];
		for(var i = 1; i <= 25;i++) {
			annualCost = (parseFloat(annualCost*(1+($("#market_escal").val()/100)))).toFixed(2);
			var point = {period:+today.getFullYear()+i,Cost:annualCost};
			project_25.push(point);
		}


		Morris.Area({
			element: 'nothing_graph',
			data: project_25,
			xkey: ['period'],
			ykeys: ['Cost'],
			labels: ['AnnualPayment'],
			pointSize: 10,
			hideHover: 'true',
			resize: true,
			lineColors: ['#ff0000'],
			lineWidth:3,
			pointSize:10,
		});

//end of graph

//production vs usage graph
		if  (document.getElementById("monthly").checked){
					jan_M = jan * 31;
					feb_M = feb * 28;
					mar_M = mar * 31;
					apr_M = apr * 30;
					may_M = may * 31;
					jun_M = jun * 30;
					jul_M = jul * 31;
					aug_M = aug * 31;
					sep_M = sep * 30;
					oct_M = oct * 31;
					nov_M = nov * 30;
					dec_M = dec * 31;
		}
		else {

			jan_M = monthlyAvg;
			feb_M = monthlyAvg;
			mar_M = monthlyAvg;
			apr_M = monthlyAvg;
			may_M = monthlyAvg;
			jun_M = monthlyAvg;
			jul_M = monthlyAvg;
			aug_M = monthlyAvg;
			sep_M = monthlyAvg;
			oct_M = monthlyAvg;
			nov_M = monthlyAvg;
			dec_M = monthlyAvg;

		}
					var barData = {
							labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
							datasets: [
									{
											label: "Usage",
											backgroundColor: 'rgb(66, 134, 244)',
											pointBorderColor: "#fff",
											data: [jan_M, feb_M, mar_M, apr_M, may_M, jun_M, jul_M, aug_M, sep_M, oct_M, nov_M, dec_M]
									},
									{
											label: "Production",
											backgroundColor: 'rgb(255, 255, 0)',
											borderColor: "rgba(26,179,148,0.7)",
											pointBackgroundColor: "rgba(26,179,148,1)",
											pointBorderColor: "#fff",
											data: [jan_M*0.856055556, feb_M*1.002413793, mar_M*1.433209877, apr_M*1.584551282, may_M*1.629358974, jun_M*1.747837838, jul_M*1.897777778, aug_M*1.923333333, sep_M*1.649694444, oct_M*1.025808081, nov_M*0.7184375, dec_M*0.735977011]
									}
							]
					};
					var barOptions = {
							responsive: true
					};
					var ctx2 = document.getElementById("prodVsUsage").getContext("2d");
					new Chart(ctx2, {type: 'bar', data: barData, options: barOptions});
//end of graph





//solar system payment vs 25 years no solar cost graph

		var annualCost = annCost;
		var solarNosolar = [];
		var period = []; var solar = [];
		var nosolar = [];

	solar.push(TotalPaymentMonthlySREC);
		period.push(today.getFullYear());
		nosolar.push(annualCost/12);

		for(var i = 1; i <= 25;i++) {
			if(i < 15) {
			annualCost = (parseFloat(annualCost*(1+($("#market_escal").val()/100)))).toFixed(2);
			period.push(today.getFullYear()+i);
			solar.push(TotalPaymentMonthlySREC);
			nosolar.push(annualCost/12);
			}
			else {
				annualCost = (parseFloat(annualCost*(1+($("#market_escal").val()/100)))).toFixed(2);
				period.push(today.getFullYear()+i);
				solar.push(0);
				nosolar.push(annualCost/12);
			}
		}


		var lineData = {
		        labels: period,
		        datasets: [

		            {
		                label: "Solar",
		                backgroundColor: 'rgba(245, 216, 0, 1)',
		                borderColor: "rgba(26,179,148,0.7)",
		                pointBackgroundColor: "rgba(26,179,148,1)",
		                pointBorderColor: "#fff",
		                data: solar
		            },{
		                label: "No Solar",
		                backgroundColor: 'rgba(21, 0, 214, 1)',
		                pointBorderColor: "#fff",
		                data: nosolar
		            }
		        ]
		    };

		    var lineOptions = {
		        responsive: true
		    };


		    var ctx = document.getElementById("solarVsnoSolar").getContext("2d");
		    new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

        //cost of doing nothing
        $("#monthlyText").text("$" + Math.ceil(monCost));
        $("#yearlyText").text("$" + Math.ceil(project_25[1].Cost));
        $("#decadeText").text("$" + Math.ceil(project_25[10].Cost));
        $("#twentFiveText").text("$" + Math.ceil(project_25[25].Cost));
        $("#costOfNothing").toggle();
        //end cost of nothing



	}



$( document ).ready(function() {


	$("#login_form").submit(function(){

				var password = $("#password").val();
				var email = $("#email").val();
				var result = true;

				if ($('#email').val().search(/^[0-9a-zA-Z]([\-.\w]*[0-9a-zA-Z]?)*@([0-9a-zA-Z][\-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,}$/) == -1){
					$("#email_field_wrap").addClass('has-error');
					$("#email_field_error").show();
					$("#email").focus();
					result  = false;
				}else{
				  $("#email_field_wrap").removeClass('has-error');
				  $("#email_field_error").hide();
				}
				if (password =='' ||  password.length < 5){
					$("#password_field_wrap").addClass('has-error');
					$("#password_field_error").show();
					result  = false;
				}else{

				 $("#password_field_error").hide();
				 $("#password_field_wrap").removeClass('has-error');
				}
				if(result){
					userLogin();
				}
		     return false;


	});


	$("#logout_btn").click(function(){
		jQuery.post(baseUrl()+"/ajaxhandler/ajaxhandler.php", {
				ajax_action: 'user_logout'
			},
					function (data) {

				 redirect();
		});

	});

//Customer Proposal



	$("#presentation_btn").click(function(){
		 $("#solar_present").toggle();
	});

	$("#cust_input_btn").click(function(){
		$("#cust_info_form").toggle();
	});


	$("#cust_cur_btn").click(function(){
		$("#usg_form").toggle();
	});


    $("#sys_info_btn").click(function(){
        $("#sys_info_from").toggle();
    });


    $("#cost_brkdown_btn").click(function(){
        $("#cost_brkdown_form").toggle();
    });
		$("#incentive_btn").click(function(){
				$("#incentive_form").toggle();
		});



		$("#solar_present").toggle();
		$("#cust_info_form").toggle();
		$("#usg_form").toggle();
    $("#cost_brkdown_form").toggle();
		$("#sys_info_from").toggle();
		$("#incentive_form").toggle();


		$("#generateInfo_btn").click(function(){
			 generateInfo();
		});


		$("#monthly").click(function(){
				if(document.getElementById("monthly").checked){
					$("#monthly_inputs").removeClass("hide");
				}
				else{
					$("#monthly_inputs").addClass("hide");
				}
		});


});
