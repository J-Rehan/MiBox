const mobile_nav = document.querySelector(".mobile-navbar-btn");
const nav_header = document.querySelector(".left_section");

const toggleNavbar = () => {
  // alert("Plz Subscribe ");
  nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());


var Calendar = function(model, options, date){
  // Default Values
  this.Options = {
    Color: '',
    LinkColor: '',
    NavShow: true,
    NavVertical: false,
    NavLocation: '',
    DateTimeShow: true,
    DateTimeFormat: 'mmm, yyyy',
    DatetimeLocation: '',
    EventClick: '',
    EventTargetWholeDay: false,
    DisabledDays: [],
    ModelChange: model
  };
  // Overwriting default values
  for(var key in options){
    this.Options[key] = typeof options[key]=='string'?options[key].toLowerCase():options[key];
  }

  model?this.Model=model:this.Model={};
  this.Today = new Date();

  this.Selected = this.Today
  this.Today.Month = this.Today.getMonth();
  this.Today.Year = this.Today.getFullYear();
  if(date){this.Selected = date}
  this.Selected.Month = this.Selected.getMonth();
  this.Selected.Year = this.Selected.getFullYear();

  this.Selected.Days = new Date(this.Selected.Year, (this.Selected.Month + 1), 0).getDate();
  this.Selected.FirstDay = new Date(this.Selected.Year, (this.Selected.Month), 0).getDay();
  this.Selected.LastDay = new Date(this.Selected.Year, (this.Selected.Month + 1), 0).getDay();

  this.Prev = new Date(this.Selected.Year, (this.Selected.Month - 1), 1);
  if(this.Selected.Month==0){this.Prev = new Date(this.Selected.Year-1, 11, 1);}
  this.Prev.Days = new Date(this.Prev.getFullYear(), (this.Prev.getMonth() + 1), 0).getDate();
};

function createCalendar(calendar, element, adjuster){
  if(typeof adjuster !== 'undefined'){
    var newDate = new Date(calendar.Selected.Year, calendar.Selected.Month + adjuster, 1);
    calendar = new Calendar(calendar.Model, calendar.Options, newDate);
    element.innerHTML = '';
  }else{
    for(var key in calendar.Options){
      typeof calendar.Options[key] != 'function' && typeof calendar.Options[key] != 'object' && calendar.Options[key]?element.className += " " + key + "-" + calendar.Options[key]:0;
    }
  }
  var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

  function AddSidebar(){
    var sidebar = document.createElement('div');
    sidebar.className += 'cld-sidebar';

    var monthList = document.createElement('ul');
    monthList.className += 'cld-monthList';

    for(var i = 0; i < months.length - 3; i++){
      var x = document.createElement('li');
      x.className += 'cld-month';
      var n = i - (4 - calendar.Selected.Month);
      // Account for overflowing month values
      if(n<0){n+=12;}
      else if(n>11){n-=12;}
      // Add Appropriate Class
      if(i==0){
        x.className += ' cld-rwd cld-nav';
        x.addEventListener('click', function(){
          typeof calendar.Options.ModelChange == 'function'?calendar.Model = calendar.Options.ModelChange():calendar.Model = calendar.Options.ModelChange;
          createCalendar(calendar, element, -1);});
        x.innerHTML += '<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.571639 7.10704C0.571639 7.34642 0.65653 7.58578 0.825954 7.76829L6.16005 13.5116C6.49937 13.8769 7.04951 13.8769 7.38868 13.5116C7.72786 13.1464 7.72786 12.5541 7.38868 12.1888L2.66878 7.10704L7.38852 2.02528C7.7277 1.65993 7.7277 1.06776 7.38852 0.702587C7.04934 0.337062 6.4992 0.337062 6.15989 0.702587L0.825789 6.44578C0.656337 6.62838 0.571639 6.86774 0.571639 7.10704Z" fill="black"/></svg>';
      }
      else if(i==months.length - 4){
        x.className += ' cld-fwd cld-nav';
        x.addEventListener('click', function(){
          typeof calendar.Options.ModelChange == 'function'?calendar.Model = calendar.Options.ModelChange():calendar.Model = calendar.Options.ModelChange;
          createCalendar(calendar, element, 1);} );
        x.innerHTML += '<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.571639 7.10704C0.571639 7.34642 0.65653 7.58578 0.825954 7.76829L6.16005 13.5116C6.49937 13.8769 7.04951 13.8769 7.38868 13.5116C7.72786 13.1464 7.72786 12.5541 7.38868 12.1888L2.66878 7.10704L7.38852 2.02528C7.7277 1.65993 7.7277 1.06776 7.38852 0.702587C7.04934 0.337062 6.4992 0.337062 6.15989 0.702587L0.825789 6.44578C0.656337 6.62838 0.571639 6.86774 0.571639 7.10704Z" fill="black"/></svg>';
      }
      else{
        if(i < 4){x.className += ' cld-pre';}
        else if(i > 4){x.className += ' cld-post';}
        else{x.className += ' cld-curr';}

        //prevent losing var adj value (for whatever reason that is happening)
        (function () {
          var adj = (i-4);
          //x.addEventListener('click', function(){createCalendar(calendar, element, adj);console.log('kk', adj);} );
          x.addEventListener('click', function(){
            typeof calendar.Options.ModelChange == 'function'?calendar.Model = calendar.Options.ModelChange():calendar.Model = calendar.Options.ModelChange;
            createCalendar(calendar, element, adj);} );
          x.setAttribute('style', 'opacity:' + (1 - Math.abs(adj)/4));
          x.innerHTML += months[n].substr(0,3);
        }()); // immediate invocation

        if(n==0){
          var y = document.createElement('li');
          y.className += 'cld-year';
          if(i<5){
            y.innerHTML += calendar.Selected.Year;
          }else{
            y.innerHTML += calendar.Selected.Year + 1;
          }
          monthList.appendChild(y);
        }
      }
      monthList.appendChild(x);
    }
    sidebar.appendChild(monthList);
    if(calendar.Options.NavLocation){
      document.getElementById(calendar.Options.NavLocation).innerHTML = "";
      document.getElementById(calendar.Options.NavLocation).appendChild(sidebar);
    }
    else{element.appendChild(sidebar);}
  }

  var mainSection = document.createElement('div');
  mainSection.className += "cld-main";

  function AddDateTime(){
      var datetime = document.createElement('div');
      datetime.className += "cld-datetime";
      if(calendar.Options.NavShow && !calendar.Options.NavVertical){
        var rwd = document.createElement('div');
        rwd.className += " cld-rwd cld-nav";
        rwd.addEventListener('click', function(){createCalendar(calendar, element, -1);} );
        rwd.innerHTML = '<svg height="15" width="15" viewBox="0 0 75 100" fill="rgba(0,0,0,0.5)"><polyline points="0,50 75,0 75,100"></polyline></svg>';
        datetime.appendChild(rwd);
      }
      var today = document.createElement('div');
      today.className += ' today';
      today.innerHTML = months[calendar.Selected.Month] + ", " + calendar.Selected.Year;
      datetime.appendChild(today);
      if(calendar.Options.NavShow && !calendar.Options.NavVertical){
        var fwd = document.createElement('div');
        fwd.className += " cld-fwd cld-nav";
        fwd.addEventListener('click', function(){createCalendar(calendar, element, 1);} );
        fwd.innerHTML = '<svg height="15" width="15" viewBox="0 0 75 100" fill="rgba(0,0,0,0.5)"><polyline points="0,0 75,50 0,100"></polyline></svg>';
        datetime.appendChild(fwd);
      }
      if(calendar.Options.DatetimeLocation){
        document.getElementById(calendar.Options.DatetimeLocation).innerHTML = "";
        document.getElementById(calendar.Options.DatetimeLocation).appendChild(datetime);
      }
      else{mainSection.appendChild(datetime);}
  }

  function AddLabels(){
    var labels = document.createElement('ul');
    labels.className = 'cld-labels';
    var labelsList = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
    for(var i = 0; i < labelsList.length; i++){
      var label = document.createElement('li');
      label.className += "cld-label";
      label.innerHTML = labelsList[i];
      labels.appendChild(label);
    }
    mainSection.appendChild(labels);
  }
  function AddDays(){
    // Create Number Element
    function DayNumber(n){
      var number = document.createElement('p');
      number.className += "cld-number";
      number.innerHTML += n;
      return number;
    }
    var days = document.createElement('ul');
    days.className += "cld-days";
    // Previous Month's Days
    for(var i = 0; i < (calendar.Selected.FirstDay); i++){
      var day = document.createElement('li');
      day.className += "cld-day prevMonth";
      //Disabled Days
      var d = i%7;
      for(var q = 0; q < calendar.Options.DisabledDays.length; q++){
        if(d==calendar.Options.DisabledDays[q]){
          day.className += " disableDay";
        }
      }

      var number = DayNumber((calendar.Prev.Days - calendar.Selected.FirstDay) + (i+1));
      day.appendChild(number);

      days.appendChild(day);
    }
    // Current Month's Days
    for(var i = 0; i < calendar.Selected.Days; i++){
      var day = document.createElement('li');
      day.className += "cld-day currMonth";
      //Disabled Days
      var d = (i + calendar.Selected.FirstDay)%7;
      for(var q = 0; q < calendar.Options.DisabledDays.length; q++){
        if(d==calendar.Options.DisabledDays[q]){
          day.className += " disableDay";
        }
      }
      var number = DayNumber(i+1);
      // Check Date against Event Dates
      for(var n = 0; n < calendar.Model.length; n++){
        var evDate = calendar.Model[n].Date;
        var toDate = new Date(calendar.Selected.Year, calendar.Selected.Month, (i+1));
        if(evDate.getTime() == toDate.getTime()){
          number.className += " eventday";
          var title = document.createElement('span');
          title.className += "cld-title";
          if(typeof calendar.Model[n].Link == 'function' || calendar.Options.EventClick){
            var a = document.createElement('a');
            a.setAttribute('href', '#');
            a.innerHTML += calendar.Model[n].Title;
            if(calendar.Options.EventClick){
              var z = calendar.Model[n].Link;
              if(typeof calendar.Model[n].Link != 'string'){
                  a.addEventListener('click', calendar.Options.EventClick.bind.apply(calendar.Options.EventClick, [null].concat(z)) );
                  if(calendar.Options.EventTargetWholeDay){
                    day.className += " clickable";
                    day.addEventListener('click', calendar.Options.EventClick.bind.apply(calendar.Options.EventClick, [null].concat(z)) );
                  }
              }else{
                a.addEventListener('click', calendar.Options.EventClick.bind(null, z) );
                if(calendar.Options.EventTargetWholeDay){
                  day.className += " clickable";
                  day.addEventListener('click', calendar.Options.EventClick.bind(null, z) );
                }
              }
            }else{
              a.addEventListener('click', calendar.Model[n].Link);
              if(calendar.Options.EventTargetWholeDay){
                day.className += " clickable";
                day.addEventListener('click', calendar.Model[n].Link);
              }
            }
            title.appendChild(a);
          }else{
            //title.innerHTML += '<a href="' + calendar.Model[n].Link + '">' + calendar.Model[n].Title + '</a>';
            title.innerHTML += '<span class="user-' + calendar.Model[n].User + '">' + calendar.Model[n].Title + '</span>';
          }
          number.appendChild(title);
        }
      }
      day.appendChild(number);
      // If Today..
      if((i+1) == calendar.Today.getDate() && calendar.Selected.Month == calendar.Today.Month && calendar.Selected.Year == calendar.Today.Year){
        day.className += " today";
      }
      days.appendChild(day);
    }
    // Next Month's Days
    // Always same amount of days in calander
    var extraDays = 14;
    if(days.children.length>35){extraDays = 7;}
    else if(days.children.length<29){extraDays = 20;}

    for(var i = 0; i < (extraDays - calendar.Selected.LastDay); i++){
      var day = document.createElement('li');
      day.className += "cld-day nextMonth";
      //Disabled Days
      var d = (i + calendar.Selected.LastDay + 1)%7;
      for(var q = 0; q < calendar.Options.DisabledDays.length; q++){
        if(d==calendar.Options.DisabledDays[q]){
          day.className += " disableDay";
        }
      }

      var number = DayNumber(i+1);
      day.appendChild(number);

      days.appendChild(day);
    }
    mainSection.appendChild(days);
  }
  if(calendar.Options.Color){
    mainSection.innerHTML += '<style>.cld-main{color:' + calendar.Options.Color + ';}</style>';
  }
  if(calendar.Options.LinkColor){
    mainSection.innerHTML += '<style>.cld-title a{color:' + calendar.Options.LinkColor + ';}</style>';
  }
  element.appendChild(mainSection);

  if(calendar.Options.NavShow && calendar.Options.NavVertical){
    AddSidebar();
  }
  if(calendar.Options.DateTimeShow){
    AddDateTime();
  }
  AddLabels();
  AddDays();
}

function caleandar(el, data, settings){
  var obj = new Calendar(data, settings);
  createCalendar(obj, el);
}

// =======================

var events = [
  {'Date': new Date(2020, 12, 10), 'Title': 'Doctor appointment at 3:25pm.', 'User': 7},
  {'Date': new Date(2020, 12, 10), 'Title': 'Josemon\'s birthday! Everybody bring presents!', 'Link': '', 'User': 6},
  {'Date': new Date(2020, 12, 11), 'Title': 'New Garfield movie comes out!', 'Link': '', 'User': 7},
  {'Date': new Date(2020, 12, 11), 'Title': 'New Garfield movie comes out!', 'Link': '', 'User': 8},
  {'Date': new Date(2020, 12, 11), 'Title': '25 year anniversary', 'Link': 'https://www.google.com.au/#q=anniversary+gifts'},
  {'Date': new Date(2020, 12, 7), 'Title': '50 year anniversary', 'Link': 'https://www.google.com.au/#q=anniversary+gifts'},
];
console.log(events);
var settings = {};
var element = document.getElementById('caleandar');
caleandar(element, events, settings);

