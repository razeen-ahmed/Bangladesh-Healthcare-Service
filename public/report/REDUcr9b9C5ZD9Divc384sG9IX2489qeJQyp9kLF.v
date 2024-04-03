module vm(clock, reset, cash_in, purchase, present_state, next_state, cash_return);
	input clock, reset;
	input [1:0] cash_in;
	output reg purchase;
	output reg [1:0] cash_return, present_state, next_state;
	parameter 	state0= 2'b00, //0tk/final state
				state1= 2'b01, //5tk state
				state2= 2'b10, //10tk state
				state3= 2'b11, //15tk state
				n = 10,//price of my product
				R0= 2'b00, //0tk return
				R5= 2'b01, //5tk return
				R10= 2'b10, //10tk return
				R15= 2'b11; //15tk return
	
	always@(posedge clock)
	begin
			if(reset==1)
			begin 
				present_state = state0;
				next_state = state0;
			end
			else
			begin
				present_state = next_state;
				
				case(present_state)
				state0: if(cash_in == 2'b00) // 0 tk
							begin
								next_state = state0;
								purchase =0;
								cash_return = R0; //2'b00
							end
						else if(cash_in == 2'b01) // 5 tk
							begin
								next_state = state1;
								purchase = 0;
								cash_return = R0;
							end
						else if(cash_in == 2'b10) // 10 tk 
							begin
								next_state = state0;
								purchase = 1;
								cash_return = R0;
							end
						else if(cash_in == 2'b11) // 20 tk 
							begin
								next_state = state0;
								purchase = 1;
								cash_return = R10;
							end
							
				state1: if(cash_in == 2'b00)
							begin
								next_state = state0;
								purchase =0;
								cash_return = R5;
							end
						else if(cash_in == 2'b01)
							begin
								next_state=state0;
								purchase = 1;
								cash_return = R0;
							end
						else if(cash_in == 2'b10)
							begin
								next_state=state0;
								purchase=1;
								cash_return = R5;
							end
						else if(cash_in == 2'b11)
							begin
								next_state = state0;
								purchase = 1;
								cash_return = R15;
							end
				endcase
			end
	end
	endmodule
	