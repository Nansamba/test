var john = {
    name : 'john',
    yearofbirth: 1990,
    calculateage: function(){
        console.log(this)
        console.log(2022 - this.yearofbirth);
        
    }  
}
john.calculateage();
var mike = {
    name: 'mike',
    yearofbirth: 1860
};

mike.calculateage = john.calculateage;
mike.calculateage();