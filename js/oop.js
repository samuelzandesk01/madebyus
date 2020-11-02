class Student{

    constructor(tolu,abdul,sylva,aliyu,con){
        this.aliyuName = aliyu;
        this.sylvaName = sylva;
        this.conName = con;
    }

    getAliyuName(greeting){
        return greeting + " my name is " + this.aliyuName  + "\r\n";;


    }
getSylvaName(greeting){
    return greeting + " I am " + this.sylvaName + "\r\n";
    
}

getConName(greeting){
    return greeting + " you know i am " + this.conName ;
}
}

student = new Student ("Tolu", "Abdul", "Sylva","Aliyu", "Covenant");

console.log(student.getAliyuName("HEY!!!"), student.getSylvaName("Hi"), student.getConName("Yo!"));




//Initialization
//Instance
// stud = new Student("Kaltuma", "Isaac");








// class Car {
//     constructor(brand, color){
//         this.carname = brand;
//         this.carColor = color;
//     }

//     static hello(col){
//         return "Hello with static" + col.carColor;
//     }

//     static present(x){
//         return "Hello world present " + x.carname;
//     }
// }

// mycar = new Car("Benz", " Red");

// console.log(Car.hello(mycar));

// class PPT {
//     constructor(ppt, pptHall){
//         this.present = ppt;
//         this.powerHall = pptHall;
//     }

//     presentation(){
//         return 'You are having a presentation @ ' + this.present; 
//     }

//     presentHall(){
//         return "You are presenting at " + this.powerHall;
//     }
// }


// class Poise extends PPT{
//     constructor(ppt, pptHall){
//         super(ppt, pptHall);
//         this.pptMall = ppt;
//         this.panache = pptHall;
//     }

//     show(){
//         return this.presentation();
//     }

//     caseFuc(){
//         return this.presentHall();
//     }
// }

// poise = new Poise("Poise Nigeria"+ "\r\n" , "Panache Class");
// console.log(poise.show(), poise.caseFuc());
