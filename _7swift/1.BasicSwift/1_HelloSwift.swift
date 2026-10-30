
import Foundation

// Chương trình nhập thông tin sinh viên

print("Nhập họ và tên: ", terminator: "")
let hoTen = readLine() ?? ""

print("Nhập quê quán: ", terminator: "")
let queQuan = readLine() ?? ""

print("Nhập tuổi: ", terminator: "")
let tuoi = Int(readLine() ?? "") ?? 0

print("===== THÔNG TIN SINH VIÊN =====")
print("Họ và tên: \(hoTen)")
print("Quê quán: \(queQuan)")
print("Tuổi: \(tuoi)")
print("Chúc bạn học lập trình Swift thật tốt!")
