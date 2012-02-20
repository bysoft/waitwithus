WAIT = (function(){

  var wait = []
  wait.app = {
    init:function(){
      wait.app.ui.fetch()
      wait.app.ui.add.events()
    },
     ui: {
       fetch: function(){
         var url = 'http://byapp.co/v1/waiting'
         $.ajax({url:url,type:'GET',success:function(data){
           var personArray = []
           $(data).each(function(){
             var name = this.name,
                phone = this.phone,
                field1 = this.field1,
                field2 = this.field2
                person = [name,phone,field1,field2]
             personArray.push(person)
           })
         wait.app.ui.populate(personArray)
         }})
       },
       populate: function(arr){
        $('#persons-waiting').empty()
         $(arr).each(function(){
          var personDetail = {
            name: this[0],
            phone: this[1],
            field1: this[2],
            field2: this[3]
            }
            $.ajax({
              url:'/javascripts/personDetail.mustache',
              type:'GET',
              success:function(snippet){

            var html = Mustache.to_html(snippet,personDetail)
            $('#persons-waiting').append(html)
              }
            })
         })

       },
       add:{
        events: function(){
         $('button#add').live('click', function(){
           var newField1 = $('#new-field1').val(),
              newName = $('#new-name').val(),
              newPhone = $('#new-phone').val(),
              newField2 = 'foo',
              newField3 = 'bar'
              var genUrl = 'http://byapp.co/v1/waiting/' + newName + '/' + newPhone + '/'
               + newField1 + '/' + newField2 + '/' + newField3
               $.ajax({
                 url:genUrl,
                 type:'POST',
                 success:function(){
                  // var smsUrl = 'http://bysoftware.us/apihackday/twilio-php/send-sms.php?num=' + newP
                   wait.app.ui.fetch()
                   // $.ajax({url:smsUrl,type:'GET'})
                 }
               })
         })
// http://bysoftware.us/apihackday/twilio-php/send-sms.php?num=' + getNumber + '

        }
         

       }
     }
  }
  wait.app.init()


}())
