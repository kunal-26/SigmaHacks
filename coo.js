var ts = new Date;
    ts = ts.getTime();
     url = 'https://cdn.abplive.com/coronastats/prod/coronastats-new.json?ts='+ts;
    fetch(url)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        //console.log(data)
        appendData(data);
      })
      .catch(function (err) {
        console.log(err);
      });

    function appendData(data) {
       stateCount = document.getElementById("stateCount");
       totalCases = document.getElementById("totalCases");
       recovered = document.getElementById("recovered");
       death = document.getElementById("death");
      //console.log(data.statewise.length)

      totalCases.innerHTML = data.totalConfirmed;
      recovered.innerHTML = data.totalRecovered;
      death.innerHTML = data.totalDeaths;

      var marquee = document.createElement("marquee");
      marquee.setAttribute("onmouseover", "this.stop();");
      marquee.setAttribute("onmouseout", "this.start();");
      marquee.setAttribute("behavior", "scroll");
      marquee.setAttribute("direction", "left");
      marquee.setAttribute("scrollamount", "10");
      var marqueeInner = document.createElement("div");
      marqueeInner.setAttribute("class", "marqueeInner");

      for (var i = 0; i < data.statewise.length; i++) {
        var stateInner = document.createElement("div");
        stateInner.innerHTML = '<span class="name">' + data.statewise[i].state + '</span>' + '<span class="number">' +
          data.statewise[i].confirmed + '</span>';
        // stateCount.appendChild(stateInner);
        marqueeInner.appendChild(stateInner);
      }
      marquee.appendChild(marqueeInner);
      stateCount.appendChild(marquee);
      //console.log(data)
       update = document.getElementById("para1");
      //let update2 = document.getElementById("para2");

      function formatAMPM() {
        var d = new Date(),
          minutes = d.getMinutes().toString().length == 1 ? '0' + d.getMinutes() : d.getMinutes(),
          hours = d.getHours().toString().length == 1 ? '0' + d.getHours() : d.getHours(),
          ampm = d.getHours() >= 12 ? 'pm' : 'am',
          months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        return days[d.getDay()] + ' ' + months[d.getMonth()] + ' ' + d.getDate() + ' ' + d.getFullYear() + ' ' +
          hours + ':' + minutes + ampm;
      }

      update.innerHTML = formatAMPM();
      //update2.innerHTML = formatAMPM();

    }


    function lockDown() {
      date1 = new Date("03/24/2020");
      today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      if (dd < 10) {
        dd = '0' + dd;
      }
      if (mm < 10) {
        mm = '0' + mm;
      }
      today = mm + '/' + dd + '/' + yyyy;

      date2 = new Date(today);
      Difference_In_Time = date2.getTime() - date1.getTime();

      Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
      //console.log(Difference_In_Days)
      //
      lockdays = document.getElementById("lockdown-day");
      lockdays.innerHTML = Difference_In_Days;
       sup = document.getElementById("sup");
      sup.innerHTML = ordinal_suffix_of(Difference_In_Days);
    }
    function ordinal_suffix_of(s) {
       j = s % 10,
            k = s % 100;
        if (j == 1 && k != 11) {
            return "st";
        }
        if (j == 2 && k != 12) {
            return "nd";
        }
        if (j == 3 && k != 13) {
            return "rd";
        }
        return "th";
    }
      
 function getQueryVariable(r) {
      for (var t = window.location.search.substring(1).split("&"), i = 0; i < t.length; i++) {
        var n = t[i].split("=");
        if (n[0] == r) return n[1]
      }
      return !1
    }
    var siteurl = getQueryVariable('mode');
    if (siteurl === "app") {
      sethref();
    }

    function sethref() {
      var topicElement = document.getElementsByClassName("topicUrl");
      
      for(var j = 0; j<=1; j++){
        var helplineAnchor = document.getElementById("helpline").getElementsByTagName("p")[j].getElementsByTagName("a");
        for(var k=0; k<=j; k++){
          helplineAnchor[k].removeAttribute("href");
          helplineAnchor[k].removeAttribute("target");
        }
      }
      
      for(var i =0; i< topicElement.length; i++){
        //var topicURL = topicElement[i].getAttribute("href");
        topicElement[i].removeAttribute("href");
        topicElement[i].removeAttribute("target");
      }
    }
    lockDown();