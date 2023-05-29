// SPDX-License-Identifier: MIT
// v2 memisahkan fungsi purchaseItem menjadi purchaseItem dan confirmItemArrive 
// v3 meningkatkan menjadi upgradeable smart contract
//pragma solidity ^0.8.0;
pragma solidity 0.8.19;


contract ProxyPurchase3 {
    //uint256 ourNumber2;
    uint256 persenCashback; //range 0-255
    address public implementation;
    struct Buyer { 
        uint idBuyer;
        address buyerAddress;
        string itemName;
        uint256 price;
    }
    address public owner;
    uint numberOfBuyer;
    
    mapping (uint => Buyer) buyers;
    mapping(string => uint256) public items;
    mapping(address => uint256) public balances;


    event ItemAdded(string name, uint256 price);
    event ItemPurchased(address buyer, string name, uint256 price, uint256 cashback);

    constructor() {
        owner = msg.sender;
        //persenCashback = 10;
    }
    
    
    function initialize() public {
        //ourNumber2 = 0x28;
        persenCashback = 0xA; //desimal 10
    }

    function addItem(string memory name, uint256 price) public {
        require(msg.sender == owner, "Only owner can add items");
        items[name] = price;
        emit ItemAdded(name, price);
    }

    function purchaseItem(string memory name) public payable {
        uint256 price = items[name];
        require(price > 0, "Item does not exist");
        require(msg.value >= price, "Not enough ether sent");

        //memasukkan alamat buyer dan nama barang ke dalam list pembeli
        uint idBuyer = numberOfBuyer++;
        buyers[idBuyer] = Buyer(idBuyer, msg.sender, name, price);//disini jumlah besaran cashback belum dimasukkan
        //jumlah item yang tersedia berkurang

        //emit ItemPurchased(msg.sender, name, price, cashback);

    }
    function confirmItemArrive(uint idBuyer) public payable{
        require(msg.sender==buyers[idBuyer].buyerAddress,"id pembelian tidak cocok");
        //perhitungan saldo dan cashback
        uint price = buyers[idBuyer].price;
        uint256 cashback = price / persenCashback;
        balances[owner] += price - cashback;
        balances[msg.sender] += cashback;

        //emit ItemPurchased(msg.sender, buyers[idBuyer].itemName, price, cashback);
        require(balances[owner]>=cashback, "seller money not enough for return cashback");
        payable(msg.sender).transfer(cashback);
    }
    function getBuyer(uint idBuyer) view public returns (address ,string memory, uint){
        /*returns itemName and its price*/
        return (buyers[idBuyer].buyerAddress, buyers[idBuyer].itemName, buyers[idBuyer].price);
    }

    function getCashback2() public view returns (uint256) {
        //return ourNumber2;
        return persenCashback;
        }
    function setImplementation(address implementation_) public {
        implementation = implementation_;
        }
        fallback() external {
            assembly {
                let ptr := mload(0x40)
                calldatacopy(ptr, 0, calldatasize())
                let result := delegatecall(gas(),sload(implementation.slot),ptr,calldatasize(),0,0)
                let size := returndatasize()
                returndatacopy(ptr, 0, size)
                switch result
                case 0 {
                    revert(ptr, size)
                    }
                default {
                    return(ptr, size)
                    }
                }
            }
        }


contract Cashback {
    //uint256 ourNumber;
    uint256 persenCashback;
    function initialize() public {
        //ourNumber = 0x64;
        persenCashback = 0xA;
        }
    function getPersenCashback() public view returns (uint256) {
        return persenCashback;
        }
    function changePersenCashback() public {
        persenCashback = 0x0;
        }
  
}
