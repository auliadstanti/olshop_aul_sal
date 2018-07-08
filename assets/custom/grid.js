$(function() {
  $.ajax({
    type: "GET",
    url: "Users/getAll/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: $(window).height(),
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "Users/getAll/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Users/add/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Users/update/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Users/delete/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "username",
          title: "Username",
          type: "text",
          width: 150
        },
        {
          name: "password",
          title: "Password",
          type: "text",
          width: 50
        },
        {
          name: "level",
          title: "Level",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
