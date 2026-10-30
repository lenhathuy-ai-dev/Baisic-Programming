"""
Nhập tên sản phẩm, đơn giá, số lượng; tính và in tổng tiền.
"""

nameProduct = input("Enter product name: ")
unitPrice = float(input("Enter the price of unit: "))
quantity = int(input("Enter the quantity: "))

totalAmount = unitPrice*quantity

print(f"Total amount of {nameProduct} is {totalAmount}.")

