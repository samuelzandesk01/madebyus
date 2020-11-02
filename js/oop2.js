class Goodies {
    constructor(goodsOne, goodsTwo, goodsThree){
        this.product1 = goodsOne;
        this.product2 = goodsTwo;
        this.product3 = goodsThree;
    }

    getProductOne(){
        return "Goodies product one is " + this.product1
    }

    getProductTwo(){
        return "Goodies product two is " + this.product2;
    }

    getProductThree = () =>{
        return "Goodies product three is " + this.product3
    }
}

class GoodiesHQ  extends Goodies{
    constructor(goodsOne, goodsTwo, goodsThree){
        super(goodsOne, goodsTwo, goodsThree);
        this.realGoodsOne = goodsOne;
        this.realGoodsTwo = goodsTwo;
        this.realGoodsThree = goodsThree;
    }

    getRealProducts = () =>{
        return this.getProductOne() + this.getProductTwo() + this.getProductThree();
    }

    

   
}

goodieshq = new GoodiesHQ("Cookies " + "\r\n" , "Sausage " + "\r\n", "Coca Cola");

console.log(goodieshq.getRealProducts());