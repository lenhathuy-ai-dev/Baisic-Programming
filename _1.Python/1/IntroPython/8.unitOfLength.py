"""
Viết chương trình nhập độ dài

"""

unit = {
    "mm": 10 ** -6,
    "cm": 10 ** -5,
    "dm": 10 ** -4,
    "m": 10 ** -3,
    "dam": 10 ** -2,
    "hm": 10 ** -1,
    "km": 1
}

length = float(input("Nhập độ dài bạn muốn chuyển đổi: "))
fromUnit = input("Nhập đơn vị đầu vào: ").lower()
toUnit = input("Nhập đơn vị muốn đầu ra: ").lower()

if fromUnit in unit and toUnit in unit:
    print(f"{length:g} {fromUnit} = {length*unit[fromUnit]/unit[toUnit]:g} {toUnit}")
else:
    print("Chương trình lỗi")
