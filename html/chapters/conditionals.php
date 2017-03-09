<p>
Sometimes (a lot of the time, in fact) you may want to write code that is only executed if certain conditions are met. An online store, for example, will only want to send out a shipping order if the customer's credit card payment was accepted. An online banking system will only allow you to log in if the given password matches the given username. A university web application may check to make sure that a student was admitted and paid tuition before allowing the student to register for classes. In all of these cases, certain conditions must be met for certain processes to run. To program computers to behave like this, programmers must use <em>conditionals</em>. Note that the root of the word "conditionals" is "condition"; this is because the computer checks that the conditions are met before executing the code.
</p>

<p>
Conditionals in Python are based around the <code>if</code> statement. The syntax looks like this:
</p>
<p>
<code>if <em>condition</em>:</code>
</p>
<p>
where the <em>condition</em> is code that evaluates to a boolean (e.g., if True:, if False:, if 8&lt;9:, if age&gt;=18:, if username=="bob" and password=="tomato":). The code that runs if the condition is True starts on the following line and is tabbed in, just like the code of a function under its definition.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	if True:
		print("This will always print, because the condition is always True")

	if False:
		print("This will never print, because the condition is always False")

	age = 18 # you can change this
	if age >= 18:
		print("You are an adult. Move out and start paying bills. Congrats!")

	var1 = 259 # you can change this
	var2 = 624 # you can change this
	if var1 > var2:
		print(str(var1) + " is greater than " + str(var2))
	if var1 < var2:
		print(str(var2) + " is greater than " + str(var1))
	if var1 == var2:
		print(str(var2) + " is equal to " + str(var1))

	username = "bob" # you can change this
	password = "tomato" # you can change this
	if username == "bob" and password == "tomato":
		print("Login successful")
		print("Hello, " + username)

	</code>
</div>

<p>
TODO if-then-else
</p>

<p>
TODO if-then-elif-else
</p>
