a = int(input("Enter first number: "))
b = int(input("Enter second number: "))

print (f"Giá trị trước khi hoán đổi 2 biến a = {a}; b = {b}")

a, b = b, a
print (f"Giá trị sau khi hoán đổi 2 biến a = {a}; b = {b}")
