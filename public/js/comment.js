$(function() {
  var paramsString = location.search

  if (paramsString != "") {
    var paramsObject = parse_query_string(paramsString.toString().slice(1));
    console.log(paramsObject)

    var group_id = paramsObject["group_id"]

    if ( group_id != undefined && group_id != "" ) {
      $("#group_filter").val(group_id);
    }
  } else {
    $("#group_filter").val(0);
  }

  // set event listener
  $("#group_filter").change(function() {
    var id = $("#group_filter").val()

    if ( id == 0 ) {
      location.search = "";
      return;
    }

    location.search = "group_id=" + id;
  });
});

// https://stackoverflow.com/questions/979975/how-to-get-the-value-from-the-get-parameters
function parse_query_string(query) {
  var vars = query.split("&");
  var query_string = {};
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    // If first entry with this name
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = decodeURIComponent(pair[1]);
      // If second entry with this name
    } else if (typeof query_string[pair[0]] === "string") {
      var arr = [query_string[pair[0]], decodeURIComponent(pair[1])];
      query_string[pair[0]] = arr;
      // If third or later entry with this name
    } else {
      query_string[pair[0]].push(decodeURIComponent(pair[1]));
    }
  }
  return query_string;
}
