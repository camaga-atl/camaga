
			$('#run').click( function() { 


				var event = $("div > p.MsoNormal").headerToJSON();
				alert(JSON.stringify(event));
				var songlist = $("table").tableToJSON({ignoreColumns: [0]});
				var songs = { "songs" : songlist };
				var concertData = $.extend({}, event, songs);				
				alert(JSON.stringify(concertData)); 
				$.post(
					'http://localhost/camaga/beta/concerts/', 
					'concert_json=' + encodeURIComponent(JSON.stringify(concertData)), 
					function(replyData) {
						window.location = "http://localhost/camaga/beta/concerts/" + "?message=" + replyData;;					
					} // function(replyData)
				); // $.post
			});

