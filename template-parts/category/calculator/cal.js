class Calculator {
	constructor(previousOperandTextElement, currentOperandTextElement){
		this.previousOperandTextElement = previousOperandTextElement
		this.currentOperandTextElement = currentOperandTextElement
		this.clear()
	}
	getDisplayNumber(number){
		 return number

	}
	resetcal(){
		var strCurOperand = this.currentOperand
	    var leng = strCurOperand.length
		var minusleng = leng * (-1)
		 
		this.currentOperand = this.currentOperand.toString().slice(0, minusleng)
		this.operation = operation

	}
	clear(){

		this.currentOperand =""
		this.previousOperandTextElement.innerText=''
		this.operation= undefined

	}
	delete(){
		this.currentOperand = this.currentOperand.toString().slice(0, -1)
	}
	appendNumber(number){
		if(number== '.' && this.currentOperand.includes('.')) return
		this.currentOperand= this.currentOperand.toString()+ number.toString()
	}
	chooseOperation(operation){
		if(this.currentOperand =='')return
		if(this.previousOperand !=''){ 
			this.compute()

			}
		this.operation = operation
		this.previousOperand = this.currentOperand
		this.currentOperand = ''
	}
	compute(){
		let computaion
		const prev = parseFloat(this.previousOperand);
		const current = parseFloat(this.currentOperand);
		if(isNaN(prev) || isNaN(current)) return ;
		
		switch (this.operation){
			case '+' :
			computaion = prev + current ;
			break
			case '-' :
			computaion = prev - current ;
			break
			case '/' :
			computaion = prev / current ;
			break
			case '*' :
			computaion = prev * current ;
			break
		default:
			return;
		}
	this.currentOperand = parseFloat(computaion).toFixed(2);
	this.operation = undefined ;
	this.previousOperand = '' ;
	}
	updateDispaly(){
		this.currentOperandTextElement.innerText = this.getDisplayNumber(this.currentOperand)
		if(this.operation != null){
			this.previousOperandTextElement.innerText = 
			`${this.previousOperand} ${this.operation} ${this.currentOperand}`
		}
		if(this.operation == computaion ){return;}
		
	}

}
const numberButtons= document.querySelectorAll('[data-number]')
const operationButtons= document.querySelectorAll('[data-operation]')
const equalsButton= document.querySelector('[data-equals]')
const deleteButton= document.querySelector('[data-delete]')
const allClearButton= document.querySelector('[data-all-clear]')
const previousOperandTextElement=document.querySelector('[data-previous-operand]')
const currentOperandTextElement= document.querySelector('[data-current-operand]')
const resetButton = document.querySelector('[data-reset]')
const calculator = new Calculator(previousOperandTextElement,currentOperandTextElement)
numberButtons.forEach(button => {
	button.addEventListener('click' , () =>{
		calculator.appendNumber(button.innerText)
		calculator.updateDispaly()
	})
})
operationButtons.forEach(button=>{
	button.addEventListener('click', () => {
	 calculator.chooseOperation(button.innerText)
	 calculator.updateDispaly()
	 })	
})
equalsButton.addEventListener('click', button=>{
	
	 calculator.compute()
	 calculator.updateDispaly()
	})

allClearButton.addEventListener('click', button=>{
	
	 calculator.clear()
	 calculator.updateDispaly()
	})

deleteButton.addEventListener('click', button=>{
	
	 calculator.delete()
	 calculator.updateDispaly()
	})
resetButton.addEventListener('click' , button=>{
	calculator.resetcal()
	calculator.updateDispaly()
})
